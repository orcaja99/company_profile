<?php

namespace App\Http\Controllers;
use App\Models\JP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class JPController extends Controller
{
    public function index()
    {
    $jp = JP::all();

    return view('jp.index', compact('jp'));
}

    public function create()
    {
        return view('jp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('slider_foto', 'public');

        jp::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('jp.index')->with('success', 'Slider foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jp = JP::findOrFail($id);

        return view('jp.edit', compact('jp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $jp = JP::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('slider_foto', 'public');
            Storage::disk('public')->delete($jp->gambar);
            $jp->gambar = $gambarPath;
        }

        $jp->save();

        return redirect()->route('jp.index')->with('success', 'Slider foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jp = JP::findOrFail($id);
        Storage::disk('public')->delete($jp->gambar);
        $jp->delete();

        return redirect()->route('jp.index')->with('success', 'Slider foto berhasil dihapus.');
    }
}

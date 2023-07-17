<?php

namespace App\Http\Controllers;
use App\Models\SO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SOController extends Controller
{
    public function index()
    {
    $so = SO::all();

    return view('so.index', compact('so'));
}

    public function create()
    {
        return view('so.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('slider_foto', 'public');

        so::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('so.index')->with('success', 'Slider foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $so = SO::findOrFail($id);

        return view('so.edit', compact('so'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $so = SO::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('slider_foto', 'public');
            Storage::disk('public')->delete($so->gambar);
            $so->gambar = $gambarPath;
        }

        $so->save();

        return redirect()->route('so.index')->with('success', 'Slider foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $so = SO::findOrFail($id);
        Storage::disk('public')->delete($so->gambar);
        $so->delete();

        return redirect()->route('so.index')->with('success', 'Slider foto berhasil dihapus.');
    }
}

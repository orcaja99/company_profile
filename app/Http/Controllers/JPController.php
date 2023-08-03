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

    return view('admin.jp.index', compact('jp'));
}

    public function create()
    {
        return view('admin.jp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,jpf,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('jp', 'public');

        jp::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.jp.index')->with('success', 'Struktur Organsisasi ditambahkan.');
    }

    public function edit($id)
    {
        $jp = jp::findOrFail($id);

        return view('admin.jp.edit', compact('jp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,jpf,svg|max:2048',
        ]);

        $jp = jp::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('jp', 'public');
            Storage::disk('public')->delete($jp->gambar);
            $jp->gambar = $gambarPath;
        }

        $jp->save();

        return redirect()->route('admin.jp.index')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jp = JP::findOrFail($id);
        Storage::disk('public')->delete($jp->gambar);
        $jp->delete();

        return redirect()->route('admin.jp.index')->with('success', 'Struktur Organisasi berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\SO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SOController extends Controller
{


    public static function getData()
    {
        $so= SO::all();
        return $so; // Mengembalikan data sebagai koleksi
    }

    public function index()
    {
    $so = SO::all();

    return view('admin.so.index', compact('so'));
}

    public function create()
    {
        return view('admin.so.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,sof,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('so', 'public');

        so::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.so.index')->with('success', 'Struktur Organsisasi ditambahkan.');
    }

    public function edit($id)
    {
        $so = so::findOrFail($id);

        return view('admin.so.edit', compact('so'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,sof,svg|max:2048',
        ]);

        $so = SO::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('so', 'public');
            Storage::disk('public')->delete($so->gambar);
            $so->gambar = $gambarPath;
        }

        $so->save();

        return redirect()->route('admin.so.index')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $so = SO::findOrFail($id);
        Storage::disk('public')->delete($so->gambar);
        $so->delete();

        return redirect()->route('admin.so.index')->with('success', 'Struktur Organisasi berhasil dihapus.');
    }
}

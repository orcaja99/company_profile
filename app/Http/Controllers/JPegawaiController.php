<?php

namespace App\Http\Controllers;
use App\Models\JPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class JPegawaiController extends Controller
{
    public function index()
    {
    $jpegawai = JPegawai::all();

    return view('admin.jpegawai.index', compact('jpegawai'));
}

    public function create()
    {
        return view('admin.jpegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('jpegawai', 'public');

        jpegawai::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.jpegawai.index')->with('success', 'Struktur Organsisasi ditambahkan.');
    }

    public function edit($id)
    {
        $jpegawai = JPegawai::findOrFail($id);

        return view('admin.jpegawai.edit', compact('jpegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image',
        ]);

        $jpegawai = JPegawai::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('jpegawai', 'public');
            Storage::disk('public')->delete($jpegawai->gambar);
            $jpegawai->gambar = $gambarPath;
        }

        $jpegawai->save();

        return redirect()->route('admin.jpegawai.index')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jpegawai = JPegawai::findOrFail($id);
        Storage::disk('public')->delete($jpegawai->gambar);
        $jpegawai->delete();

        return redirect()->route('admin.jpegawai.index')->with('success', 'Struktur Organisasi berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image', // Mendefinisikan validasi untuk gambar
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        // Upload gambar ke storage
        $gambarPath = $request->file('gambar')->store('public/images');
        $gambarNama = basename($gambarPath);

        // Simpan data berita ke database
        $berita = new Berita;
        $berita->judul = $validatedData['judul'];
        $berita->gambar = $gambarNama;
        $berita->tanggal = $validatedData['tanggal'];
        $berita->keterangan = $validatedData['keterangan'];
        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'berita berhasil ditambahkan.');
    }

    public function show($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'nullable|image|max:2048', // Mengizinkan pengguna mengosongkan gambar saat update
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        $berita = Berita::find($id);
        $berita->judul = $validatedData['judul'];

        // Jika ada gambar baru diupload, hapus gambar lama dan upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/images');
            $gambarNama = basename($gambarPath);
            Storage::delete('public/images/' . $berita->gambar); // Hapus gambar lama
            $berita->gambar = $gambarNama;
        }

        $berita->tanggal = $validatedData['tanggal'];
        $berita->keterangan = $validatedData['keterangan'];
        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = berita::find($id);
        Storage::delete('public/images/' . $berita->gambar); // Hapus gambar terkait berita
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'berita berhasil dihapus.');
    }
}

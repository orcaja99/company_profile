<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::all();
        return view('pengumuman.index', compact('pengumumans'));
    }

    public function create()
    {
        return view('pengumuman.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|max:2048', // Mendefinisikan validasi untuk gambar
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        // Upload gambar ke storage
        $gambarPath = $request->file('gambar')->store('public/images');
        $gambarNama = basename($gambarPath);

        // Simpan data pengumuman ke database
        $pengumuman = new Pengumuman;
        $pengumuman->judul = $validatedData['judul'];
        $pengumuman->gambar = $gambarNama;
        $pengumuman->tanggal = $validatedData['tanggal'];
        $pengumuman->keterangan = $validatedData['keterangan'];
        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('pengumuman.show', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'nullable|image|max:2048', // Mengizinkan pengguna mengosongkan gambar saat update
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        $pengumuman = Pengumuman::find($id);
        $pengumuman->judul = $validatedData['judul'];

        // Jika ada gambar baru diupload, hapus gambar lama dan upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/images');
            $gambarNama = basename($gambarPath);
            Storage::delete('public/images/' . $pengumuman->gambar); // Hapus gambar lama
            $pengumuman->gambar = $gambarNama;
        }

        $pengumuman->tanggal = $validatedData['tanggal'];
        $pengumuman->keterangan = $validatedData['keterangan'];
        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        Storage::delete('public/images/' . $pengumuman->gambar); // Hapus gambar terkait pengumuman
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenghargaanController extends Controller
{
    public function index()
    {
        $penghargaan = Penghargaan::all();
        return view('admin.penghargaan.index', compact('penghargaan'));
    }

    public function create()
    {
        return view('admin.penghargaan.create');
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

        // Simpan data penghargaan ke database
        $penghargaan = new penghargaan;
        $penghargaan->judul = $validatedData['judul'];
        $penghargaan->gambar = $gambarNama;
        $penghargaan->tanggal = $validatedData['tanggal'];
        $penghargaan->keterangan = $validatedData['keterangan'];
        $penghargaan->save();

        return redirect()->route('admin.penghargaan.index')->with('success', 'penghargaan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $penghargaan = Penghargaan::find($id);
        return view('admin.penghargaan.show', compact('penghargaan'));
    }

    public function edit($id)
    {
        $penghargaan = Penghargaan::find($id);
        return view('admin.penghargaan.edit', compact('penghargaan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'nullable|image|max:2048', // Mengizinkan pengguna mengosongkan gambar saat update
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        $penghargaan = Penghargaan::find($id);
        $penghargaan->judul = $validatedData['judul'];

        // Jika ada gambar baru diupload, hapus gambar lama dan upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/images');
            $gambarNama = basename($gambarPath);
            Storage::delete('public/images/' . $penghargaan->gambar); // Hapus gambar lama
            $penghargaan->gambar = $gambarNama;
        }

        $penghargaan->tanggal = $validatedData['tanggal'];
        $penghargaan->keterangan = $validatedData['keterangan'];
        $penghargaan->save();

        return redirect()->route('admin.penghargaan.index')->with('success', 'penghargaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penghargaan = Penghargaan::find($id);
        Storage::delete('public/images/' . $penghargaan->gambar); // Hapus gambar terkait penghargaan
        $penghargaan->delete();

        return redirect()->route('admin.penghargaan.index')->with('success', 'penghargaan berhasil dihapus.');
    }
}

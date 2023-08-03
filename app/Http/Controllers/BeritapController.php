<?php

namespace App\Http\Controllers;

use App\Models\Beritap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritapController extends Controller
{
    public function index()
    {
        $beritaps = beritap::all();
        return view('admin.beritap.index', compact('beritaps'));
    }

    public function create()
    {
        return view('beritap.create');
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

        // Simpan data beritap ke database
        $beritap = new beritap;
        $beritap->judul = $validatedData['judul'];
        $beritap->gambar = $gambarNama;
        $beritap->tanggal = $validatedData['tanggal'];
        $beritap->keterangan = $validatedData['keterangan'];
        $beritap->save();

        return redirect()->route('admin.beritap.index')->with('success', 'beritap berhasil ditambahkan.');
    }

    public function show($id)
    {
        $beritap = Beritap::find($id);
        return view('admin.beritap.show', compact('beritap'));
    }

    public function edit($id)
    {
        $beritap = Beritap::find($id);
        return view('admin.beritap.edit', compact('beritap'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'nullable|image|max:2048', // Mengizinkan pengguna mengosongkan gambar saat update
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        $beritap = Beritap::find($id);
        $beritap->judul = $validatedData['judul'];

        // Jika ada gambar baru diupload, hapus gambar lama dan upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/images');
            $gambarNama = basename($gambarPath);
            Storage::delete('public/images/' . $beritap->gambar); // Hapus gambar lama
            $beritap->gambar = $gambarNama;
        }

        $beritap->tanggal = $validatedData['tanggal'];
        $beritap->keterangan = $validatedData['keterangan'];
        $beritap->save();

        return redirect()->route('admin.beritap.index')->with('success', 'beritap berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $beritap = Beritap::find($id);
        Storage::delete('public/images/' . $beritap->gambar); // Hapus gambar terkait beritap
        $beritap->delete();

        return redirect()->route('admin.beritap.index')->with('success', 'beritap berhasil dihapus.');
    }
}

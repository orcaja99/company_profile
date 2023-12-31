<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public static function getData()
    {
        $kegiatan = Kegiatan::paginate(6);
        return $kegiatan; // Mengembalikan data sebagai koleksi
    }

    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('admin.kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'required|image',
            'keterangan' => 'required',
            'sumber' => 'required',
        ]);

        // Simpan data kegiatan ke database
        // $kegiatan = new Kegiatan;
        // $kegiatan->judul = $validatedData['judul'];
        // $kegiatan->tanggal = $validatedData['tanggal'];
        // $kegiatan->keterangan = $validatedData['keterangan'];
        // $kegiatan->sumber = $validatedData['sumber'];
        // $kegiatan->save();
        $gambarPath = $request->file('gambar')->store('public/images');
        $gambarNama = basename($gambarPath);

        // Simpan data kegiatan ke database
        $kegiatan = new Kegiatan;
        $kegiatan->judul = $validatedData['judul'];
        $kegiatan->tanggal = $validatedData['tanggal'];
        $kegiatan->gambar = $gambarNama;
        $kegiatan->keterangan = $validatedData['keterangan'];
        $kegiatan->sumber = $validatedData['sumber'];
        $kegiatan->save();

        return redirect()->route('admin.kegiatan.index')->with('success', 'kegiatan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    public function showU($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('homepage.detailkegiatan', compact('kegiatan'));
    }


    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
            'keterangan' => 'required',
            'sumber' => 'required',
        ]);

        $kegiatan = Kegiatan::find($id);
        $kegiatan->judul = $validatedData['judul'];
        $kegiatan->tanggal = $validatedData['tanggal'];

        // Jika ada gambar baru diupload, hapus gambar lama dan upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/images');
            $gambarNama = basename($gambarPath);
            Storage::delete('public/images/' . $kegiatan->gambar); // Hapus gambar lama
            $kegiatan->gambar = $gambarNama;
        }

        $kegiatan->keterangan = $validatedData['keterangan'];
        $kegiatan->sumber = $validatedData['sumber'];
        $kegiatan->save();

        return redirect()->route('admin.kegiatan.index')->with('success', 'kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        Storage::delete('public/images/' . $kegiatan->gambar); 
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'kegiatan berhasil dihapus.');
    }
}

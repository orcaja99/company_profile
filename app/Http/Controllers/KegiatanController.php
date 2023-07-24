<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'sumber' => 'required',
        ]);

        // Simpan data kegiatan ke database
        $kegiatan = new Kegiatan;
        $kegiatan->judul = $validatedData['judul'];
        $kegiatan->tanggal = $validatedData['tanggal'];
        $kegiatan->keterangan = $validatedData['keterangan'];
        $kegiatan->sumber = $validatedData['sumber'];
        $kegiatan->save();

        return redirect()->route('kegiatan.index')->with('success', 'kegiatan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'sumber' => 'required',
        ]);

        $kegiatan = kegiatan::find($id);
        $kegiatan->judul = $validatedData['judul'];
        $kegiatan->tanggal = $validatedData['tanggal'];
        $kegiatan->keterangan = $validatedData['keterangan'];
        $kegiatan->sumber = $validatedData['sumber'];
        $kegiatan->save();

        return redirect()->route('kegiatan.index')->with('success', 'kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kegiatan = kegiatan::find($id);
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'kegiatan berhasil dihapus.');
    }
}

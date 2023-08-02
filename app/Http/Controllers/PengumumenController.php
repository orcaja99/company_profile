<?php

namespace App\Http\Controllers;

use App\Models\Pengumumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumenController extends Controller
{
    public function index()
    {
        $pengumumens = Pengumumen::all();
        return view('pengumumen.index', compact('pengumumens'));
    }

    public function create()
    {
        return view('pengumumen.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        // Simpan data                                                                                                                    uman ke database
        $pengumumen = new Pengumumen;
        $pengumumen->judul = $validatedData['judul'];
        $pengumumen->tanggal = $validatedData['tanggal'];
        $pengumumen->keterangan = $validatedData['keterangan'];
        $pengumumen->save();

        return redirect()->route('pengumumen.index')->with('success', 'pengumumen berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pengumumen = Pengumumen::find($id);
        return view('pengumumen.show', compact('pengumumen'));
    }

    public function edit($id)
    {
        $pengumumen = Pengumumen::find($id);
        return view('pengumumen.edit', compact('pengumumen'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        $pengumumen = Pengumumen::find($id);
        $pengumumen->judul = $validatedData['judul'];
        $pengumumen->tanggal = $validatedData['tanggal'];
        $pengumumen->keterangan = $validatedData['keterangan'];
        $pengumumen->save();

        return redirect()->route('pengumumen.index')->with('success', 'pengumumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengumumen = Pengumumen::find($id);
        $pengumumen->delete();

        return redirect()->route('pengumumen.index')->with('success', 'pengumumen berhasil dihapus.');
    }
}

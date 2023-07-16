<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumens = Pengumuman::all(); // Ubah variabel $pengumumans menjadi $pengumumens
        return view('pengumuman.index', compact('pengumumens')); // Ubah pengumumans menjadi pengumumens
    }

    public function create()
    {
        return view('pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        Pengumuman::create($request->all());

        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman created successfully.');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.show', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update($request->all());

        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman updated successfully.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman deleted successfully.');
    }
}


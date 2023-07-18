<?php

namespace App\Http\Controllers;

use App\Models\DSB;
use Illuminate\Http\Request;

class DSBController extends Controller
{
    public function index()
    {
        $dsb = DSB::all();
        return view('dsb.index', compact('dsb'));
    }

    public function create()
    {
        return view('dsb.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        dsb::create($validatedData);

        return redirect('/dsb')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $dsb = DSB::findOrFail($id);
        return view('dsb.show', compact('dsb'));
    }

    public function edit($id)
    {
        $dsb = DSB::findOrFail($id);
        return view('dsb.edit', compact('dsb'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        dsb::whereId($id)->update($validatedData);

        return redirect('/dsb')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dsb = DSB::findOrFail($id);
        $dsb->delete();

        return redirect('/dsb')->with('success', 'Data berhasil dihapus.');
    }
}

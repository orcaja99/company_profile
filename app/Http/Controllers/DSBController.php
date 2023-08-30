<?php

namespace App\Http\Controllers;

use App\Models\DSB;
use Illuminate\Http\Request;

class DSBController extends Controller
{

    public static function getData()
    {
        $dsb = dsb::all();
        return $dsb; // Mengembalikan data sebagai koleksi
    }

    public function index()
    {
        $dsb = DSB::all();
        return view('admin.dsb.index', compact('dsb'));
    }

    public function create()
    {
        return view('admin.dsb.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        dsb::create($validatedData);

        return redirect('/admin/dsb')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $dsb = DSB::findOrFail($id);
        return view('admin.dsb.show', compact('dsb'));
    }

    public function edit($id)
    {
        $dsb = DSB::findOrFail($id);
        return view('admin.dsb.edit', compact('dsb'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        dsb::whereId($id)->update($validatedData);

        return redirect('/admin/dsb')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dsb = DSB::findOrFail($id);
        $dsb->delete();

        return redirect('/admin/dsb')->with('success', 'Data berhasil dihapus.');
    }
}

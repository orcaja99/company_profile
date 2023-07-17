<?php

namespace App\Http\Controllers;

use App\Models\SMT;
use Illuminate\Http\Request;

class SMTController extends Controller
{
    public function index()
    {
        $smt = SMT::all();
        return view('smt.index', compact('smt'));
    }

    public function create()
    {
        return view('smt.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required',
            'keterangan' => 'required',
        ]);

        SMT::create($validatedData);

        return redirect('/smt')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $smt = SMT::findOrFail($id);
        return view('smt.show', compact('smt'));
    }

    public function edit($id)
    {
        $smt = SMT::findOrFail($id);
        return view('smt.edit', compact('smt'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required',
            'keterangan' => 'required',
        ]);

        SMT::whereId($id)->update($validatedData);

        return redirect('/smt')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $smt = SMT::findOrFail($id);
        $smt->delete();

        return redirect('/smt')->with('success', 'Data berhasil dihapus.');
    }
}

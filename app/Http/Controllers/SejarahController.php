<?php

namespace App\Http\Controllers;


use App\Models\sejarah;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('admin.sejarah.index', compact('sejarah'));
    }

    public function create()
    {
        return view('admin.sejarah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        Sejarah::create($validatedData);

        return redirect()->route('admin.sejarah.index')->with('success', 'Data sejarah berhasil disimpan');
    }

    public function edit($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
        ]);

        sejarah::where('id', $id)->update($validatedData);

        return redirect()->route('admin.sejarah.index')->with('success', 'Data sejarah berhasil diperbarui');
    }

    public function destroy($id)
    {
        sejarah::destroy($id);

        return redirect()->route('admin.sejarah.index')->with('success', 'Data sejarah berhasil dihapus');
    }
}
<?php

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
        $sejarah = new Sejarah;
        $sejarah->judul = $request->input('judul');
        $sejarah->sub_judul = $request->input('sub_judul');
        $sejarah->judul_keterangan = $request->input('judul_keterangan');
        $sejarah->keterangan = $request->input('keterangan');
        $sejarah->save();

        return redirect()->route('admin/sejarah.index')->with('success', 'Sejarah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $sejarah = Sejarah::find($id);
        return view('admin.sejarah.show', compact('sejarah'));
    }

    public function edit($id)
    {
        $sejarah = Sejarah::find($id);
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->judul = $request->input('judul');
        $sejarah->sub_judul = $request->input('sub_judul');
        $sejarah->judul_keterangan = $request->input('judul_keterangan');
        $sejarah->keterangan = $request->input('keterangan');
        $sejarah->save();

        return redirect()->route('admin/sejarah.index')->with('success', 'Sejarah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->delete();

        return redirect()->route('admin/sejarah.index')->with('success', 'Sejarah berhasil dihapus.');
    }
}
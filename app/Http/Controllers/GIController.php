<?php

namespace App\Http\Controllers;
use App\Models\GI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GIController extends Controller
{
    public function index()
    {
    $gi = GI::all();

    return view('admin.gi.index', compact('gi'));
}


     static function getData()
    {
        $gi= GI::all();
        return $gi; // Mengembalikan data sebagai koleksi
    }

    public function create()
    {
        return view('admin.gi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('gi', 'public');

        gi::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.gi.index')->with('success', 'igaleri ipa ditambahkan.');
    }

    public function edit($id)
    {
        $gi = GI::findOrFail($id);

        return view('admin.gi.edit', compact('gi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gi = GI::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('gi', 'public');
            Storage::disk('public')->delete($gi->gambar);
            $gi->gambar = $gambarPath;
        }

        $gi->save();

        return redirect()->route('admin.gi.index')->with('success', 'galeri ipa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gi = GI::findOrFail($id);
        Storage::disk('public')->delete($gi->gambar);
        $gi->delete();

        return redirect()->route('admin.gi.index')->with('success', 'galeri ipa berhasil dihapus.');
    }
}

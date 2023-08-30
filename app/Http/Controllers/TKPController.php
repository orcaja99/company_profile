<?php

namespace App\Http\Controllers;
use App\Models\TKP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TKPController extends Controller
{

    public static function getData()
    {
        $tkp= TKP::all();
        return $tkp; // Mengembalikan data sebagai koleksi
    }

    public function index()
    {
    $tkp = TKP::all();

    return view('admin.tkp.index', compact('tkp'));
    }

    public function create()
    {
        return view('admin.tkp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('slider_foto', 'public');

        TKP::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.tkp.index')->with('success', 'tabel klasifikasi pelanggan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tkp = TKP::findOrFail($id);

        return view('admin.tkp.edit', compact('tkp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tkp = TKP::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('tkp', 'public');
            Storage::disk('public')->delete($tkp->gambar);
            $tkp->gambar = $gambarPath;
        }

        $tkp->save();

        return redirect()->route('admin.tkp.index')->with('success', 'tabel klasifikasi pelanggan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tkp = TKP::findOrFail($id);
        Storage::disk('public')->delete($tkp->gambar);
        $tkp->delete();

        return redirect()->route('admin.tkp.index')->with('success', 'tabel klasifikasi pelanggan dihapus.');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\JPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class JPegawaiController extends Controller
{
    public function index()
    {
    $jpegawai = JPegawai::all();

    return view('jpegawai.index', compact('jpegawai'));
}

    public function create()
    {
        return view('jpegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('jpegawai', 'public');

        jpegawai::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('jpegawai.index')->with('success', 'Slider foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jpegawai = JPegawai::findOrFail($id);

        return view('jpegawai.edit', compact('jpegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|max:2048',
        ]);

        $jpegawai = JPegawai::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('slider_foto', 'public');
            Storage::disk('public')->delete($jpegawai->gambar);
            $jpegawai->gambar = $gambarPath;
        }

        $jpegawai->save();

        return redirect()->route('jpegawai.index')->with('success', 'Jumlah pegawai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jpegawai = JPegawai::findOrFail($id);
        Storage::disk('public')->delete($jpegawai->gambar);
        $jpegawai->delete();

        return redirect()->route('jpegawai.index')->with('success', 'Jumlah Pegawai berhasil dihapus.');
    }
}

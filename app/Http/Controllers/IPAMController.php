<?php

namespace App\Http\Controllers;
use App\Models\IPAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class IPAMController extends Controller
{

    
    static function getData()
    {
        $ipam= IPAM::all();
        return $ipam; // Mengembalikan data sebagai koleksi
    }

    public function index()
    {
    $ipam = IPAM::all();

    return view('admin.ipam.index', compact('ipam'));
    }

    public function create()
    {
        return view('admin.ipam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('ipam', 'public');

        IPAM::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.ipam.index')->with('success', 'instalasi pengolahaan air minum ditambahkan.');
    }

    public function edit($id)
    {
        $ipam = IPAM::findOrFail($id);

        return view('admin.ipam.edit', compact('ipam'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ipam = IPAM::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('ipam', 'public');
            Storage::disk('public')->delete($ipam->gambar);
            $ipam->gambar = $gambarPath;
        }

        $ipam->save();

        return redirect()->route('admin.ipam.index')->with('success', 'instalasi pengolahaan air minum berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ipam = IPAM::findOrFail($id);
        Storage::disk('public')->delete($ipam->gambar);
        $ipam->delete();

        return redirect()->route('admin.ipam.index')->with('success', 'instalasi pengolahaan air minum berhasil dihapus.');
    }
}

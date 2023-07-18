<?php

namespace App\Http\Controllers;
use App\Models\SAB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SABController extends Controller
{
    public function index()
    {
    $sab = SAB::all();

    return view('sab.index', compact('sab'));
}

    public function create()
    {
        return view('sab.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('sab', 'public');

        sab::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('sab.index')->with('success', 'sumber air baku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sab = SAB::findOrFail($id);

        return view('sab.edit', compact('sab'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sab = SAB::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('sab', 'public');
            Storage::disk('public')->delete($sab->gambar);
            $sab->gambar = $gambarPath;
        }

        $sab->save();

        return redirect()->route('sab.index')->with('success', 'sumber air baku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sab = SAB::findOrFail($id);
        Storage::disk('public')->delete($sab->gambar);
        $sab->delete();

        return redirect()->route('sab.index')->with('success', 'sumber air baku berhasil dihapus.');
    }
}

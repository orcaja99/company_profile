<?php

namespace App\Http\Controllers;
use App\Models\SliderFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SliderFotoController extends Controller
{
    public function index()
    {
    $sliderFotos = SliderFoto::all();

    return view('sliderfoto.index', compact('sliderFotos'));
}

    public function create()
    {
        return view('sliderfoto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('slider_foto', 'public');

        SliderFoto::create([
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('sliderfoto.index')->with('success', 'Slider foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sliderFoto = SliderFoto::findOrFail($id);

        return view('sliderfoto.edit', compact('sliderFoto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sliderFoto = SliderFoto::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('slider_foto', 'public');
            Storage::disk('public')->delete($sliderFoto->gambar);
            $sliderFoto->gambar = $gambarPath;
        }

        $sliderFoto->save();

        return redirect()->route('sliderfoto.index')->with('success', 'Slider foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sliderFoto = SliderFoto::findOrFail($id);
        Storage::disk('public')->delete($sliderFoto->gambar);
        $sliderFoto->delete();

        return redirect()->route('sliderfoto.index')->with('success', 'Slider foto berhasil dihapus.');
    }
}
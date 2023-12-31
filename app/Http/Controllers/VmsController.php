<?php

namespace App\Http\Controllers;


use App\Models\Vms;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Vms;
use Illuminate\Http\Request;

class VmsController extends Controller
{

    public static function getData()
    {
        $vms= Vms::all();
        return $vms; // Mengembalikan data sebagai koleksi
    }


    public function index()
    {
        $vms = Vms::all();
        return view('admin.vms.index', compact('vms'));
    }

    public function create()
    {
        return view('admin.vms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'strategi' => 'required',
        ]);

        Vms::create($validatedData);

        return redirect()->route('admin.vms.index')->with('success', 'Data VMS berhasil disimpan');
    }

    public function edit($id)
    {
        $vms = Vms::findOrFail($id);
        return view('admin.vms.edit', compact('vms'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'strategi' => 'required',
        ]);

        Vms::where('id', $id)->update($validatedData);

        return redirect()->route('admin.vms.index')->with('success', 'Data VMS berhasil diperbarui');
    }

    public function destroy($id)
    {
        Vms::destroy($id);

        return redirect()->route('admin.vms.index')->with('success', 'Data VMS berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //untuk conroler halaman berita artikel
    public function berita_index()
    {
        $beritas = Berita::all();
        return view('customer.berita.berita', compact('beritas'));
    }

    public function berita_show($id)
    {
        $berita = Berita::find($id);
        return view('customer.berita.detail_berita', compact('berita'));
    }

    //untuk controller halaman berita peristiwa
    public function beritap_index()
    {
        $beritaps = Beritap::all();
        return view('customer.beritap.beritap', compact('beritaps'));
    }

    public function beritap_show($id)
    {
        $beritap = Beritap::find($id);
        return view('customer.beritap.detail_beritap', compact('beritap'));
    }
}





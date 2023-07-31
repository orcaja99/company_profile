<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Beritap;
use App\Models\DSB;
use App\Models\Kegiatan;
use App\Models\SAB;
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

    public function dsb_index()
    {
        $dsb = DSB::all();
        return view('customer.dsb.dsb', compact('dsb'));
    }

    public function dsb_show($id)
    {
        $dsb = DSB::find($id);
        return view('customer.dsb.dsb', compact('dsb'));
    }

    public function kegiatan_index()
    {
        $kegiatans = Kegiatan::all();
        return view('customer.kegiatan.kegiatan', compact('kegiatans'));
    }

    public function kegiatan_show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('customer.kegiatan.detail_kegiatan', compact('kegiatan'));
    }

    public function sab_index()
    {
        $sab = SAB::all();
        return view('customer.sab.sab', compact('sab'));
    }
}






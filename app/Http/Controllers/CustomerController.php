<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Beritap;
use App\Models\DSB;
use App\Models\Kegiatan;
use App\Models\SAB;
use App\Models\IPAM;
use App\Models\GI;
use App\Models\TKP;
use App\Models\Penghargaan;
use App\Models\SO;
use App\Models\JP;
use App\Models\JPegawai;
use App\Models\SliderFoto;
use App\Models\Pengumumen;
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

    public function ipam_index()
    {
        $ipam = IPAM::all();
        return view('customer.ipam.ipam', compact('ipam'));
    }

    public function gi_index()
    {
        $gi = Gi::all();
        return view('customer.gi.gi', compact('gi'));
    }

    public function tkp_index()
    {
        $tkp = TKP::all();
        return view('customer.tkp.tkp', compact('tkp'));
    }

    public function penghargaan_index()
    {
        $penghargaan = Penghargaan::all();
        return view('customer.penghargaan.penghargaan', compact('penghargaan'));
    }

    public function penghargaan_show($id)
    {
        $penghargaan = Penghargaan::find($id);
        return view('customer.penghargaan.detail_penghargaan', compact('penghargaan'));
    }

    public function so_index()
    {
        $so = SO::all();
        return view('customer.so.so', compact('so'));
    }

    public function jp_index()
    {
        $jp = JP::all();
        return view('customer.jp.jp', compact('jp'));
    }

    public function jpegawai_index()
    {
        $jpegawai = JPegawai::all();
        return view('customer.jpegawai.jpegawai', compact('jpegawai'));
    }

    public function home_index()
    {
        $sliderfoto = SliderFoto::all();
        $pengumumen = Pengumumen::all();
        $berita = Berita::all();
        $beritap = Beritap::all();
        return view('customer.home.home', compact('sliderfoto', 'pengumumen', 'berita', 'beritap'));
    }

   
}






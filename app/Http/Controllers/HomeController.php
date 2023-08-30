<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SliderFotoController;
use App\Http\Controllers\PengumumenController;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data dari controller SliderFotoController
        $sliderFotoData = SliderFotoController::getData();

        // Mengambil data dari controller PengumumenController
        $pengumumanData = PengumumenController::getData();

        // Menggabungkan data dari kedua controller
        $data = [
            'sliderFoto' => $sliderFotoData,
            'pengumumens' => $pengumumanData,
        ];

        // Mengirim data ke tampilan
        return view('homepage.index', $data);
    }
}





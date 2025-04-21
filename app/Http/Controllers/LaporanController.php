<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showLaporan()
    {
        $contact = (object)[
            'name' => 'PT. GRATAMA FINANCE INDONESIA',
            'description' => 'Gedung Plaza Asia Lt 6, Jl Jend. Sudirman Kav.59, Kebayoran Baru, Senayan, Jakarta Selatan, Indonesia',
            'telepon' => '021-51402228',
            'email' => 'csadmin@gratama-finance.co.id',
        ];

        $services = []; // Tambahkan jika ada data services

        return view('laporan', compact('contact', 'services'));
    }
}

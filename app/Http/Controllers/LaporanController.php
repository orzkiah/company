<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showLaporan()
    {
        $contact = (object)[
            'name' => 'PT. GRATAMA',
            'description' => 'Perusahaan terkemuka dalam bidang ...',
            'telepon' => '021-51402228',
            'email' => 'info@grtama.com',
        ];

        $services = []; // Tambahkan jika ada data services

        return view('laporan', compact('contact', 'services'));
    }
}

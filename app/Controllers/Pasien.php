<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pasien extends Controller
{
    public function index()
    {

        $data = [
            'judul' => 'Data Pasien'
        ];

        echo view('Templates/v_header', $data);
        echo view('Templates/v_sidebar');
        echo view('Templates/v_topbar');
        echo view('Templates/v_footer');
        echo view('Pasien/index');
    }
}

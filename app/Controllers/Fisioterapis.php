<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Fisioterapis extends Controller
{
    public function index()
    {

        $data = [
            'judul' => 'Data Fisioterapis'
        ];

        echo view('Templates/v_header', $data);
        echo view('Templates/v_sidebar');
        echo view('Templates/v_topbar');
        echo view('Templates/v_footer');
        echo view('Fisioterapis/index');
    }
}

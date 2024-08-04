<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'homepage'
        ];

        echo view('Templates/v_header', $data);
        echo view('Templates/v_sidebar');
        echo view('Templates/v_topbar');
        echo view('Templates/v_footer');
        echo view('home/index');
    }
}

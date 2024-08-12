<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard'
        ];
        return view('admin-pages/v_dashboard', $data);
    }
}

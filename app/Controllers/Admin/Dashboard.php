<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'active_nav' => 'dashboard',
        ];
        return view('admin/dashboard', $data);
    }
}

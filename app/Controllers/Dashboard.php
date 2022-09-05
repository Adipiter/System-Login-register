<?php

namespace App\Controllers;

use App\Models\UserModel;
class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard page'
        ];

        return view('dashboard', $data);    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasahboardController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('conten.dashboard', $data);
    }
}

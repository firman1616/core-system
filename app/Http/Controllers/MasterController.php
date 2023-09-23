<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Master'
        ];
        return view('conten.master', $data);
    }
}

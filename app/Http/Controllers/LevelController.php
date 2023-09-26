<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    function index() {
        $data = [
            'title' => 'Master Jabatan',
            'sub_title' => 'List Jabatan'
        ];
        return view('master.jabatan',$data);
    }
}

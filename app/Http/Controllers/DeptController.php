<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeptController extends Controller
{
    function index() {
        $data = [
            'title' => 'Master Department',
            'sub_title' => 'Department List'
        ];
        return view('master.dept',$data);
    }
}

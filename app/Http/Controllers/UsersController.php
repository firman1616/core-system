<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Master Users',
            'sub_title' => 'Users List'
        ];
        return view('master.user', $data);
    }
}

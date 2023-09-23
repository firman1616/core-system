<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Master Users'
        ];
        return view('conten.user', $data);
    }
}

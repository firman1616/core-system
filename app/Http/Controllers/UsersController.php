<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Master Users',
            'sub_title' => 'Users List'
        ];
        return view('master.user.index', $data);
    }

    public function tableUser()
    {
        $returnHTML = view('master.user.table', [
            'user' => User::all()
        ])->render();

        return response()->json(['status' => 'success', 'html' => $returnHTML]);
    }
}

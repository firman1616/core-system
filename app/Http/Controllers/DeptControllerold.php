<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    function index() 
    {
        $data = [
            'title' => 'Master Department',
            'sub_title' => 'Department List'
        ];
        return view('master.dept',$data);
    }

    function AddData(Request $request) 
    {
        $deptId = $request->id;

        // $data = Dept::updateorCreate([
        //     'id' => $deptId
        // ],[
        //     'name' => $request->namaDept,
        //     'status' => $request->status,
        // ]);

        $data = [
            'name' => $request->namaDept,
            'status' => $request->status,
        ];
        // dd($data);
        Dept::create($data);
        return Response()->json($data);
    }
}

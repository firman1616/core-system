<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = [
            'title' => 'Master Department',
            'sub_title' => 'Department List',
            'dept' => Dept::all()
        ];
        // dd(Dept::all());

        // if (request()->ajax()) {
        //     return DataTables()->of(Dept::select(['kode_dept', 'name', 'status'])->get())
        //         ->addColumn('action', 'conten.action')
        //         ->rawColumns(['action'])
        //         ->addIndexColumn()
        //         ->make(true);
        // }
        return view('master.dept', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dept::create([
            'kode_dept' => $request->kodeDept,
            'name' => $request->namaDept,
            'status' => $request->status
        ]);
        return response()->json(['success' => 'Data Berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

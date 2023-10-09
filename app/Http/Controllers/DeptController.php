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
        return view('master.departement.index', $data);
    }

    public function tableDepartement()
    {
        $returnHTML = view('master.departement.table', [
            'dept' => Dept::all()
        ])->render();

        return response()->json(['status' => 'success', 'html' => $returnHTML]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource and update data in storage.
     */
    public function storeAndUpdate(Request $request)
    {
        if($request->id){ // if ID exists then update the data
            $dept = Dept::findOrFail($request->id);

            $dept->update([
                'kode_dept' => $request->kodeDept,
                'name' => $request->namaDept,
                'status' => $request->status,
            ]);
            return response()->json(['success' => 'Data Berhasil diubah']);
        }else{ // if the ID doesn't exist then create new data
            Dept::create([
                'kode_dept' => $request->kodeDept,
                'name' => $request->namaDept,
                'status' => $request->status
            ]);
            return response()->json(['success' => 'Data Berhasil ditambahkan']);
        }
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
    public function vedit($id)
    {
        $data = Dept::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Dept::where('id', $id)->delete();
    }
}

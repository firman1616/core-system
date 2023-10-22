<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Master Jabatan',
            'subtitle' => 'List Jabatan',
            'titleform' => 'Form Data',
            'jabatan' => Jabatan::all()
        ];
        return view('master.jabatan.index', $data);
    }

    public function tableJabatan()
    {
        $returnHTML = view('master.jabatan.table', [
            'jabatan' => Jabatan::all()
        ])->render();

        return response()->json(['status' => 'success', 'html' => $returnHTML]);
    }

    public function storeAndUpdate(Request $request)
    {
        if ($request->id) { // if ID exists then update the data
            $jabatan = Jabatan::findOrFail($request->id);

            $jabatan->update([
                'name' => $request->levelname,
                'status' => $request->status,
            ]);
            return response()->json(['message' => 'Data Berhasil diubah']);
        } else { // if the ID doesn't exist then create new data
            Jabatan::create([
                'name' => $request->levelname,
                'status' => $request->status,
            ]);
            return response()->json(['message' => 'Data Berhasil ditambahkan']);
        }
    }

    public function vedit($id)
    {
        $jabatan = Jabatan::where('id', $id)->first();
        return response()->json(['result' => $jabatan]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        //
    }
}

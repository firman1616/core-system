<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Roles',
            'subtitle' => 'Roles List',
            'titleform' => 'Form data',
            'role' => Role::all()
        ];
        return view('master.role.index', $data);
    }

    public function tableRole()
    {
        $returnHTML = view('master.role.table', [
            'role' => Role::all()
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
     * Store a newly created resource in storage.
     */
    public function storeAndUpdate(Request $request)
    {
        if ($request->id) { // if ID exists then update the data
            $role = Role::findOrFail($request->idRole);

            $role->update([
                'name' => $request->rolename,
                'status' => $request->status,
            ]);
            return response()->json(['message' => 'Data Berhasil diubah']);
        } else { // if the ID doesn't exist then create new data
            Role::create([
                'name' => $request->rolename,
                'status' => $request->status,
            ]);
            return response()->json(['message' => 'Data Berhasil ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Doctor::all();
        return view('admin.dokter.index',compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.dokter.create', compact('roles', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'specialization' => 'required|string'
        ]);
        Doctor::create([
            'name' => $request->name,
            'specialization' => $request->specialization
        ]);
        return redirect()->route('admin.dokter.index')->with('success',
            'data Dokter Berhasil di tambahkan');
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
    public function edit($id)
    {
        $dokter = Doctor::findOrFail($id);
        return view('admin.dokter.edit',compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $dokter)
    {
        $request->validate([
            // 'name' => 'required|string',
            'specialization' => 'required|string'
        ]);
        $dokter->update($request->all());
        return redirect()->route('admin.dokter.index')->with('success',
            'Data Dokter Berhasil di Edit');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $dokter)
    {
        $dokter->delete();
        return redirect()->route('admin.dokter.index')->with('success',
            'Data Dokter Berhasil dihapus');
    }
}

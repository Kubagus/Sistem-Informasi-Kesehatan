<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Pharmacist;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function HomeIndex() {
        $users = User::all();
        $roles = Role::all();
        $doctors = Doctor::all();
        $totalUser = $users->count();
        $totalRole = $roles->count();
        $totalDokter = $doctors->count();
        return view('admin.home', compact('totalUser', 'totalRole', 'totalDokter'));
    }
    // public function indexUsers() {
    //     $users = User::all();
    //     $totalUser = $users->count();
    //     return view('admin.users.index', compact('users'));
    // }

    // public function indexRoles() {
    //     $roles = Role::all();
    //     $totalRole = $roles->count();
    //     return view('admin.roles.index', compact('totalRole'));
    // }

    // public function indexDoctors() {
    //     $doctors = Doctor::all();
    //     return view('admin.doctors.index', compact('doctors'));
    // }

    // public function indexNurses() {
    //     $nurses = Nurse::all();
    //     return view('admin.nurses.index', compact('nurses'));
    // }

    // public function indexPharmacists() {
    //     $pharmacists = Pharmacist::all();
    //     return view('admin.pharmacists.index', compact('pharmacists'));
    // }

    // public function indexPatients() {
    //     $patients = Patient::all();
    //     return view('admin.patients.index', compact('patients'));
    // }
}

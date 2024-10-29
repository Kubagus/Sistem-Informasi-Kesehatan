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
    public function indexUsers() {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function indexRoles() {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function indexDoctors() {
        $doctors = Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function indexNurses() {
        $nurses = Nurse::all();
        return view('admin.nurses.index', compact('nurses'));
    }

    public function indexPharmacists() {
        $pharmacists = Pharmacist::all();
        return view('admin.pharmacists.index', compact('pharmacists'));
    }

    public function indexPatients() {
        $patients = Patient::all();
        return view('admin.patients.index', compact('patients'));
    }
}

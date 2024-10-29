<?php

namespace App\Http\Controllers;

use App\Models\Checkup;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NurseController extends Controller
{
    public function indexCheckups()
    {
        $checkups = Checkup::where('nurse_id', Auth::id())->with('patient')->get();
        return view('nurse.checkups.index', compact('checkups'));
    }

    public function createCheckup()
    {
        $patients = Patient::all();
        return view('nurse.checkups.create', compact('patients'));
    }

    public function storeCheckup(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'date' => 'required|date',
            'details' => 'required|string',
        ]);

        Checkup::create([
            'patient_id' => $request->patient_id,
            'nurse_id' => Auth::id(),
            'date' => $request->date,
            'details' => $request->details,
        ]);

        return redirect()->route('nurse.checkups.index')->with('success', 'Checkup created successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacistController extends Controller
{
    public function indexMedications()
    {
        $medications = Medication::where('pharmacist_id', Auth::id())->with('patient')->get();
        return view('pharmacist.medications.index', compact('medications'));
    }

    public function createMedication()
    {
        $patients = Patient::all();
        return view('pharmacist.medications.create', compact('patients'));
    }

    public function storeMedication(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'medication_name' => 'required|string',
            'dosage' => 'required|string',
        ]);

        Medication::create([
            'patient_id' => $request->patient_id,
            'pharmacist_id' => Auth::id(),
            'medication_name' => $request->medication_name,
            'dosage' => $request->dosage,
        ]);

        return redirect()->route('pharmacist.medications.index')->with('success', 'Medication recorded successfully.');
    }
}

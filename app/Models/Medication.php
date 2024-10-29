<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'pharmacist_id', 'medication_name', 'dosage'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }
}

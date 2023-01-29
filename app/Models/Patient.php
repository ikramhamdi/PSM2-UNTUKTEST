<?php

namespace App\Models;

use App\Http\Controllers\PatientController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';
    protected $fillable = ['patientID', 'patientName', 'patientAge', 'patientGender', 'patientRace', 'treatmentType', 'treatmentDate'];
}

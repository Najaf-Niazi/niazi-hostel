<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'application_id',
        'student_name',
        'father_name',
        'cnic',
        'cnic_image',
        'dob',
        'gender',
        'occupation',
        'phone',
        'email',
        'address',
        'guardian_phone',
        'relation',
        'room_type',
        'room_number',
        'joining_date',
        'institute',
        'designation',
        'document',
        'notes',
        'status',
    ];
}
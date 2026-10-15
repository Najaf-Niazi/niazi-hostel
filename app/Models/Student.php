<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'admission_id',
        'student_name',
        'father_name',
        'cnic',
        'cnic_image',
        'phone',
        'email',
        'address',
        'occupation',
        'institute',
        'designation',
        'room_type',
        'room_number',
        'joining_date',
        'status',
    ];
}
<?php

namespace App\Http\Controllers;

use App\Mail\AdmissionSubmitted;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'studentName' => 'required|string|max:255',
            'fatherName' => 'required|string|max:255',

            'cnic' => 'required|string|max:30|unique:admissions,cnic',

            'cnic_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'dob' => 'required|date',
            'gender' => 'required|string|max:50',
            'occupation' => 'required|string|max:100',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:255',
            'address' => 'required|string',
            'guardianPhone' => 'required|string|max:30',
            'relation' => 'required|string|max:100',
            'roomType' => 'required|string|max:100',
            'roomNumber' => 'required|string|max:50',
            'joiningDate' => 'required|date',
            'institute' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',

            'document' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',

            'notes' => 'nullable|string',
            'agreement' => 'accepted',
        ]);


        /*
        |--------------------------------------------------------------------------
        | CNIC IMAGE UPLOAD
        |--------------------------------------------------------------------------
        */

        $cnicImagePath = null;

        if ($request->hasFile('cnic_image')) {

            $cnicImagePath = $request
                ->file('cnic_image')
                ->store(
                    'cnic-images',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | DOCUMENT UPLOAD
        |--------------------------------------------------------------------------
        */

        $documentPath = null;

        if ($request->hasFile('document')) {

            $documentPath = $request
                ->file('document')
                ->store(
                    'admission-documents',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | APPLICATION ID
        |--------------------------------------------------------------------------
        */

        $applicationId =
            'NH-' . strtoupper(uniqid());


        /*
        |--------------------------------------------------------------------------
        | CREATE ADMISSION
        |--------------------------------------------------------------------------
        */

        $admission = Admission::create([

            'application_id' => $applicationId,

            'student_name' => $request->studentName,

            'father_name' => $request->fatherName,

            'cnic' => $request->cnic,

            'cnic_image' => $cnicImagePath,

            'dob' => $request->dob,

            'gender' => $request->gender,

            'occupation' => $request->occupation,

            'phone' => $request->phone,

            'email' => $request->email,

            'address' => $request->address,

            'guardian_phone' => $request->guardianPhone,

            'relation' => $request->relation,

            'room_type' => $request->roomType,

            'room_number' => $request->roomNumber,

            'joining_date' => $request->joiningDate,

            'institute' => $request->institute,

            'designation' => $request->designation,

            'document' => $documentPath,

            'notes' => $request->notes,

            'status' => 'pending',
        ]);


        /*
        |--------------------------------------------------------------------------
        | SUBMISSION EMAIL
        |--------------------------------------------------------------------------
        */

        if ($admission->email) {

            Mail::to($admission->email)
                ->send(
                    new AdmissionSubmitted($admission)
                );
        }


        /*
        |--------------------------------------------------------------------------
        | SUCCESS RESPONSE
        |--------------------------------------------------------------------------
        */

        return back()->with([

            'success' =>
                'Your admission application has been submitted successfully.',

            'application_id' =>
                $admission->application_id,

            'application_data' =>
                $admission->only([

                    'student_name',

                    'father_name',

                    'cnic',

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

                ]),
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Mail\AdmissionApproved;
use App\Mail\AdmissionRejected;
use App\Models\Admission;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminAdmissionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $admissions = Admission::query()

            // Approved admissions list se hide rahenge
            ->where('status', '!=', 'approved')

            ->when($search, function ($query, $search) {

                $query->where(function ($q) use ($search) {

                    $q->where(
                        'application_id',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'student_name',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'cnic',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'phone',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'room_number',
                        'like',
                        "%{$search}%"
                    );

                });

            })

            ->latest()
            ->paginate(10);

        return view(
            'admin.admissions.index',
            compact(
                'admissions',
                'search'
            )
        );
    }


    public function show(Admission $admission)
    {
        return view(
            'admin.admissions.show',
            compact('admission')
        );
    }


    public function approve(Admission $admission)
    {
        /*
        |--------------------------------------------------------------------------
        | ALREADY APPROVED CHECK
        |--------------------------------------------------------------------------
        */

        if ($admission->status === 'approved') {

            return redirect()
                ->route('admin.admissions.index')
                ->with(
                    'success',
                    'Admission already approved hai.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | FIND SELECTED ROOM
        |--------------------------------------------------------------------------
        */

        $room = Room::where(
            'room_number',
            $admission->room_number
        )->first();


        if (!$room) {

            return redirect()
                ->route(
                    'admin.admissions.show',
                    $admission->id
                )
                ->withErrors([
                    'room' =>
                        'Selected room database mein nahi mila.'
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | SYNC ROOM OCCUPANCY
        |--------------------------------------------------------------------------
        */

        $room->syncOccupancy();


        /*
        |--------------------------------------------------------------------------
        | ROOM FULL CHECK
        |--------------------------------------------------------------------------
        */

        if (
            $room->occupied_seats
            >=
            $room->total_seats
        ) {

            return redirect()
                ->route(
                    'admin.admissions.show',
                    $admission->id
                )
                ->withErrors([
                    'room' =>
                        'Selected room already full hai.'
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | APPROVE + CREATE STUDENT
        |--------------------------------------------------------------------------
        */

        DB::transaction(
            function () use ($admission, $room) {

                /*
                |--------------------------------------------------------------------------
                | APPROVE ADMISSION
                |--------------------------------------------------------------------------
                */

                $admission->status = 'approved';

                $admission->save();


                /*
                |--------------------------------------------------------------------------
                | CREATE / UPDATE STUDENT
                |--------------------------------------------------------------------------
                */

                Student::updateOrCreate(

                    [
                        'admission_id' =>
                            $admission->id,
                    ],

                    [
                        'student_name' =>
                            $admission->student_name,

                        'father_name' =>
                            $admission->father_name,

                        'cnic' =>
                            $admission->cnic,

                        'cnic_image' =>
                            $admission->cnic_image,

                        'phone' =>
                            $admission->phone,

                        'email' =>
                            $admission->email,

                        'address' =>
                            $admission->address,

                        'occupation' =>
                            $admission->occupation,

                        'institute' =>
                            $admission->institute,

                        'designation' =>
                            $admission->designation,

                        'room_type' =>
                            $admission->room_type,

                        'room_number' =>
                            $admission->room_number,

                        'joining_date' =>
                            $admission->joining_date,

                        'status' =>
                            'active',
                    ]

                );


                /*
                |--------------------------------------------------------------------------
                | SYNC OCCUPANCY AGAIN
                |--------------------------------------------------------------------------
                */

                $room->syncOccupancy();
            }
        );


        /*
        |--------------------------------------------------------------------------
        | APPROVAL EMAIL
        |--------------------------------------------------------------------------
        */

        if ($admission->email) {

            Mail::to(
                $admission->email
            )->send(

                new AdmissionApproved(
                    $admission
                )

            );
        }


        /*
        |--------------------------------------------------------------------------
        | SUCCESS RESPONSE
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route(
                'admin.admissions.index'
            )
            ->with(
                'success',
                'Admission approved successfully. Student added and room occupancy updated.'
            );
    }


    public function reject(Admission $admission)
    {
        /*
        |--------------------------------------------------------------------------
        | APPROVED ADMISSION CHECK
        |--------------------------------------------------------------------------
        */

        if ($admission->status === 'approved') {

            return redirect()
                ->route(
                    'admin.admissions.index'
                )
                ->withErrors([
                    'admission' =>
                        'Approved student ko Students section se manage karein.'
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | ALREADY REJECTED
        |--------------------------------------------------------------------------
        */

        if ($admission->status === 'rejected') {

            return redirect()
                ->route(
                    'admin.admissions.show',
                    $admission->id
                )
                ->with(
                    'success',
                    'Admission already rejected hai.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | REJECT ADMISSION
        |--------------------------------------------------------------------------
        */

        $admission->status = 'rejected';

        $admission->save();


        /*
        |--------------------------------------------------------------------------
        | REJECTION EMAIL
        |--------------------------------------------------------------------------
        */

        if ($admission->email) {

            Mail::to(
                $admission->email
            )->send(

                new AdmissionRejected(
                    $admission
                )

            );
        }


        return redirect()
            ->route(
                'admin.admissions.show',
                $admission->id
            )
            ->with(
                'success',
                'Admission rejected and rejection email sent successfully.'
            );
    }


    public function destroy(Admission $admission)
    {
        /*
        |--------------------------------------------------------------------------
        | APPROVED ADMISSION SAFETY
        |--------------------------------------------------------------------------
        */

        if ($admission->status === 'approved') {

            return redirect()
                ->route(
                    'admin.admissions.index'
                )
                ->withErrors([
                    'admission' =>
                        'Approved admission ko Students section se manage karein.'
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | DELETE PENDING / REJECTED ADMISSION
        |--------------------------------------------------------------------------
        */

        $admission->delete();


        return redirect()
            ->route(
                'admin.admissions.index'
            )
            ->with(
                'success',
                'Admission deleted successfully.'
            );
    }
}
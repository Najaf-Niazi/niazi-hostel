<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $students = Student::query()
            ->when($search, function ($query, $search) {

                $query->where(function ($q) use ($search) {

                    $q->where('student_name', 'like', "%{$search}%")
                        ->orWhere('cnic', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('room_number', 'like', "%{$search}%");

                });

            })
            ->latest()
            ->paginate(10);

        return view(
            'admin.students.index',
            compact('students', 'search')
        );
    }


    public function destroy(Student $student)
    {
        // Student ka current room number save kar lo
        $roomNumber = $student->room_number;


        // Student delete karo
        $student->delete();


        // Student delete hone ke baad room ko actual data se sync karo
        if ($roomNumber) {

            $room = Room::where(
                'room_number',
                $roomNumber
            )->first();


            if ($room) {

                $room->syncOccupancy();

            }

        }


        return redirect()
            ->route('admin.students.index')
            ->with(
                'success',
                'Student deleted successfully and room occupancy updated.'
            );
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminImageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $students = Student::query()

            ->whereNotNull('cnic_image')

            ->where('cnic_image', '!=', '')

            ->when($search, function ($query, $search) {

                $query->where(function ($q) use ($search) {

                    $q->where(
                        'student_name',
                        'like',
                        "%{$search}%"
                    )

                    ->orWhere(
                        'father_name',
                        'like',
                        "%{$search}%"
                    )

                    ->orWhere(
                        'cnic',
                        'like',
                        "%{$search}%"
                    );

                });

            })

            ->latest()
            ->paginate(12);

        return view(
            'admin.images.index',
            compact(
                'students',
                'search'
            )
        );
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admission;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()
                ->route('admin.dashboard');
        }


        return back()
            ->withErrors([
                'username' => 'Username / password incorrect.',
            ]);
    }


    public function dashboard()
    {
        $pendingAdmissions = Admission::where(
            'status',
            'pending'
        )->count();


        $approvedAdmissions = Admission::where(
            'status',
            'approved'
        )->count();


        $totalStudents = Student::where(
            'status',
            'active'
        )->count();


        $recentAdmissions = Admission::latest()
            ->take(5)
            ->get();


        return view(
            'admin.dashboard',
            compact(
                'pendingAdmissions',
                'approvedAdmissions',
                'totalStudents',
                'recentAdmissions'
            )
        );
    }


    public function showChangePassword()
    {
        return view('admin.change-password');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);


        $user = User::find(Auth::id());


        if (!$user) {

            return redirect()
                ->route('admin.login.form')
                ->withErrors([
                    'login' => 'Admin user not found.',
                ]);
        }


        if (!Hash::check(
            $request->current_password,
            $user->password
        )) {

            return back()
                ->withErrors([
                    'current_password' => 'Current password incorrect hai.',
                ]);
        }


        $user->password = Hash::make(
            $request->new_password
        );

        $user->save();


        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect()
            ->route('admin.login.form')
            ->with(
                'success',
                'Password successfully updated. Please login again.'
            );
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect()
            ->route('admin.login.form');
    }
}
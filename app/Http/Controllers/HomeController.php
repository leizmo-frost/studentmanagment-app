<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('Admin')) {
            $parents = Parents::latest()->get();
            $teachers = Teacher::latest()->get();
            $students = Student::latest()->get();
            $subjects = Subject::latest()->get();
            $classes = Grade::latest()->get();

            return view('home', compact('parents', 'teachers', 'students', 'subjects', 'classes'));
        } elseif ($user->hasRole('Teacher')) {
            $teacher = $user->teacher()->with(['subjects', 'classes', 'students'])->firstOrFail();

            return view('home', compact('teacher'));
        } elseif ($user->HasRoles('Parent')) {
            $parent = $user->parent()->with(['children'])->firstOrFail();

            return view('home', compact('parent'));
        } elseif ($user->hasRole('Student')) {
            $student = $user->student()->with(['parent', 'class', 'attendances'])->firstOrFail();

            return view('home', compact('student'));
        } else {
            return 'NO ROLE ASSIGNED YET!';
        }
    }

    /**
     * PROFILE
     */
    public function profile()
    {
        return view('profile.index');
    }

    public function profileEdit()
    {
        return view('profile.edit');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id()
        ]);

        $user = auth()->user();

        if ($request->hasFile('profile_picture')) {
            $profile = Str::slug($user->name) . '-' . $user->id . '.' . $request->profile_picture->getClientOriginalExtension();
            $request->profile_picture->move(public_path('images/profile'), $profile);
        } else {
            $profile = 'avatar.png';
        }

        $user->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'profile_picture'   => $profile
        ]);

        return redirect()->route('profile');
    }

    /**
     * CHANGE PASSWORD
     */
    public function changePasswordForm()
    {
        return view('profile.changepassword');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'currentpassword' => 'required',
            'newpassword'     => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!(Hash::check($request->currentpassword, $user->password))) {
            return back()->with([
                'msg_currentpassword' => 'Your current password does not match the password you provided. Please try again.'
            ]);
        }

        if (strcmp($request->currentpassword, $request->newpassword) === 0) {
            return back()->with([
                'msg_currentpassword' => 'New Password cannot be the same as your current password. Please choose a different password.'
            ]);
        }

        $user->password = bcrypt($request->newpassword);
        $user->save();

        Auth::logout();
        return redirect()->route('login');
    }
}

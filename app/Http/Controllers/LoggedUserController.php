<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Submission;

class LoggedUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->flush();
        return redirect()->route('user.login');
    }

    public function showDashboard()
    {
        $user = Auth::user();

        return view('user.dashboard', compact('user'));
    }

    public function showApply()
    {
        return view('user.apply');
    }

    public function showGraduating()
    {
        $students = User::all();
        return view('user.graduating', compact('students'));
    }

    public function postApply(Request $request)
    {
        $this->validate($request, [
            'lib_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'borrow_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'libcard_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hall_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dept_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dsa_string' => 'required',
            'adviser_name' => 'required',
            'adviser_email' => 'required|email',
        ], [
            'lib_file.required' => "The library clearance image file is required",
            'borrow_file.required' => "The Borrowers card image file is required",
            'libcard_file.required' => "The Library card  image file is required",
            'hall_file.required' => "The Hall clearance form image file is required",
            'dept_file.required' => "The Departmental clearance form image file is required",
            'dsa_string.required' => "The DSA Teller receipt Number is required",
            'adviser_name.required' => "The Part adviser name is required",
            'adviser_email.required' => "Part adviser email is required",
            'lib_file.max' => "The Library clearance file shouldn't exceed 2MB"
        ]);

        $lib_file = 'lib-' . time() . '.' . $request->lib_file->getClientOriginalExtension();
        $borrow_file = 'borrow-' . time() . '.' .  $request->lib_file->getClientOriginalExtension();
        $libcard_file = 'libcard-' . time() . '.' .  $request->lib_file->getClientOriginalExtension();
        $hall_file = 'hall-' . time() . '.' .  $request->lib_file->getClientOriginalExtension();
        $dept_file = 'dept-' . time() . '.' . $request->lib_file->getClientOriginalExtension();

        //Move all the images
        request()->lib_file->move(public_path('uploads'), $lib_file);
        request()->borrow_file->move(public_path('uploads'), $borrow_file);
        request()->libcard_file->move(public_path('uploads'), $libcard_file);
        request()->hall_file->move(public_path('uploads'), $hall_file);
        request()->dept_file->move(public_path('uploads'), $dept_file);

        //Record the submission ;
        $submission = new Submission();
        $submission->user_id = Auth::id();
        $submission->is_approved = 0;
        $submission->save();

        $user = Auth::user();
        $user->lib_file = $lib_file;
        $user->borrow_file = $borrow_file;
        $user->libcard_file = $libcard_file;
        $user->hall_file = $hall_file;
        $user->dept_file = $dept_file;
        $user->dsa_string = $request->dsa_string;
        $user->adviser_name = $request->adviser_name;
        $user->adviser_email = $request->adviser_email;
        $user->save();

        $request->session()->flash('success', 'Clearance application submitted successfully!');
        return redirect()->back();
    }

    public function applicationStatus(Request $request)
    {
        return view('user.status');
    }
}

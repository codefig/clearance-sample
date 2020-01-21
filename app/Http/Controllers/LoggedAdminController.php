<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Department;
use App\Submission;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoggedAdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        return redirect()->route('admin.login');
    }

    public function showAddDepartment()
    {

        return view('admin.addDepartment');
    }

    public function postAddDepartment(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'faculty' => 'required',
        ]);
        $dept = new Department($request->all());
        $dept->save();
        $request->session()->flash('success', 'Department added successfully');
        return redirect()->back();
    }

    public function showAddStudent()
    {
        $departments = Department::all();

        return view('admin.addStudent', compact('departments'));
    }

    public function postAddStudent(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'department' => 'required',
            'password' => 'required',
            'matric' => 'required|unique:users,matric',
        ]);

        $student = new User($request->all());
        $student->matric = $request->matric;
        $student->department = $request->department;
        $student->email_verified_at = null;
        $student->password = Hash::make($request->password);
        $student->is_graduating = $request->is_graduating;
        $student->is_approved = 0;
        $student->is_serving = 0;
        $student->save();
        $request->session()->flash('success', 'Student record added successfully');
        return redirect()->back();
    }

    public function showAllStudents()
    {
        $students = User::all();
        return view('admin.allstudents', compact('students'));
    }

    public function showGraduatingList()
    {
        $students = User::where('is_graduating', '=', 1)->get();
        return view('admin.graduating', compact('students'));
    }

    public function showApproved()
    {
        return view('admin.showapproved');
    }

    public function showApplications()
    {
        $applications = Submission::all();

        return view('admin.applications', compact('applications'));
    }

    public function approveSubmission(Request $request, $id)
    {
        $user =  Submission::find($id)->user;
        $user->is_approved = 1;
        $user->save();

        $user_submission = Submission::where('id',$id)->first();
        $user_submission->is_approved = 1;
        $user_submission->save();
        // return (string)($user_submission->user());
        $request->session()->flash('success', 'Clearance Application approved for '.$user->matric);
        return redirect()->back();
    }

    public function disproveSubmission(Request $request, $id){
        $user =  Submission::find($id)->user;
        $user->is_approved = 0;
        $user->save();

        $user_submission = Submission::where('id',$id)->first();
        $user_submission->is_approved = 0;
        $user_submission->save();
        // return (string)($user_submission->user());
        $request->session()->flash('danger', 'Clearance Application disapproved for '.$user->matric);
        return redirect()->back();
    }
}

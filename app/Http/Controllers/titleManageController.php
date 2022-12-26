<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Lecturers;
use Session;

class titleManageController extends Controller
{
    // index for displaying home page of title manage module
    public function index()
    {
        $role = Auth::user()->role;
        // check if the role is admin
        if ($role == '0') {
            return view('errorAccessStudent');
        }else {
            return view('TitleManage.titleManageHome') ;
        }
    }

    // open the view listing all the students with their PSM Title
    public function openAssignSupervisor() {
        $Students=Students::all() ;
        return view('TitleManage.assignSupervisor')-> with ('students',$Students);
    }

    // open the view listing all supervisors details
    public function openViewStudentSupervisor() {
        $Lecturers=Lecturers::all() ;
        return view('TitleManage.viewStudentSupervisor')-> with ('lecturers',$Lecturers);
    }

    // open student profile showing singular student details 
    public function openStudentProfile($studentSupervised,$lectId) {
        $Lecturers=Lecturers::all() ;
        // check if the student supervised is exist
        if ($studentSupervised != "Null") {
            $students = Students::select('*')->where('matricNumber','=',$studentSupervised)->first();
            $lecturer = Lecturers::find($lectId);
            return view ('TitleManage.viewStudentDetails',compact('students','lecturer'));
        }else {
            
            return view('TitleManage.viewStudentSupervisor')-> with ('lecturers',$Lecturers)
            ->with('successMsg','Please assign a student first before proceed to view student profile.');   
        }
        
    }

    // search the table for user input from the search bar 
    public function searchExpertise() {
        $searchText=$_GET['query'];
        // search the column of expertise,name and studentSupervised in 'Lecturers' table
        $lecturers = Lecturers::where('expertise','LIKE','%'.$searchText.'%')
                    ->orWhere ('name','LIKE','%'.$searchText.'%') 
                    ->orWhere ('studentSupervised1','LIKE','%'.$searchText.'%')
                    ->orWhere ('studentSupervised2','LIKE','%'.$searchText.'%')
                    ->orWhere ('studentSupervised3','LIKE','%'.$searchText.'%')
                    ->orWhere ('studentSupervised4','LIKE','%'.$searchText.'%')->get();

        return view ('TitleManage.viewStudentSupervisor',compact('lecturers'));
    }

    // open assigning form to assign supervisor to that student
    public function show($id) {
        $Students=Students::all() ;
        $students = Students::find($id);
        $studentsSupervisor = Students::where('id','=',$id)->value('supervisorName');
        // check whether the quota of student supervised is full
        if ($studentsSupervisor == "Null"){
            $lecturers = Lecturers::where('studentSupervised1','Null')
                            ->orWhere('studentSupervised2', 'Null')
                            ->orWhere('studentSupervised3', 'Null')
                            ->orWhere('studentSupervised4', 'Null')->get()->sortBy('name');
            return view('TitleManage.assignForm',compact('students','lecturers'));
        }else {
            return view('TitleManage.assignSupervisor')-> with ('students',$Students)->with('successMsg','This student has already been assigned to a supervisor.');
            
        }
        
    }

    // update by adding supervisor name to students table
    // update by adding matric number to lecturers table 
    public function update(Request $request,$id) {
        
        $students = Students::find($id);
        $input = $request->input ('supervisorName');
        $students -> update (['supervisorName'=>$input]);
        $lecturers = Lecturers::where('name','=',$input);
        $studentsMatric = Students::where('id','=',$id)->value('matricNumber');
        $supervised1 = Lecturers::where('name','=',$input)->value('studentSupervised1');
        $supervised2 = Lecturers::where('name','=',$input)->value('studentSupervised2');
        $supervised3 = Lecturers::where('name','=',$input)->value('studentSupervised3');
        $supervised4 = Lecturers::where('name','=',$input)->value('studentSupervised4');
        // check and fill in the available supervised slot with student matric number (Maximum of 4 students)
        if ($supervised1 == "Null"){
            $lecturers -> update(['studentSupervised1'=>$studentsMatric]);
        }else if ($supervised2 == "Null") {
            $lecturers -> update(['studentSupervised2'=>$studentsMatric]);
        }else if ($supervised3 == "Null") {
            $lecturers -> update(['studentSupervised3'=>$studentsMatric]);
        }else if ($supervised4 == "Null") {
            $lecturers -> update(['studentSupervised4'=>$studentsMatric]);
        }
        $Students=Students::all() ;
        return view('TitleManage.assignSupervisor')-> with ('students',$Students)->with('successMsg','Assigned Successfully!');
    }
}

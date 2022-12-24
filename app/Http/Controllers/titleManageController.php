<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Lecturers;
use Session;

class titleManageController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return view('errorAccessStudent');
        }else {
            return view('TitleManage.titleManageHome') ;
        }
    }

    public function openAssignSupervisor() {
        $Students=Students::all() ;
        return view('TitleManage.assignSupervisor')-> with ('students',$Students);
    }

    public function openViewStudentSupervisor() {
        $Lecturers=Lecturers::all() ;
        return view('TitleManage.viewStudentSupervisor')-> with ('lecturers',$Lecturers);
    }

    public function searchExpertise() {
        $searchText=$_GET['query'];
        $lecturers = Lecturers::where('expertise','LIKE','%'.$searchText.'%')->get();

        return view ('TitleManage.viewStudentSupervisor',compact('lecturers'));
    }

    public function show($id) {
        $Students=Students::all() ;
        $students = Students::find($id);
        $studentsSupervisor = Students::where('id','=',$id)->value('supervisorName');
        if ($studentsSupervisor == "Null"){
            $lecturers = Lecturers::where('studentSupervised1','Null')
                            ->orWhere('studentSupervised2', 'Null')
                            ->orWhere('studentSupervised3', 'Null')
                            ->orWhere('studentSupervised4', 'Null')->get()->sortBy('name');
            return view('TitleManage.assignForm',compact('students','lecturers'));
        }else {
            return view('TitleManage.assignSupervisor')-> with ('students',$Students)->with('successMsg','This student has already been assigned to a supervisor.');;
            
        }
        
    }

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
        if ($supervised1 == "Null"){
            $lecturers -> update(['studentSupervised1'=>$studentsMatric]);
        }else if ($supervised2 == "Null") {
            $lecturers -> update(['studentSupervised2'=>$studentsMatric]);
        }else if ($supervised3 == "Null") {
            $lecturers -> update(['studentSupervised3'=>$studentsMatric]);
        }else if ($supervised4 == "Null") {
            $lecturers -> update(['studentSupervised4'=>$studentsMatric]);
        }
        
        return view('TitleManage.titleManageHome');
    }
}

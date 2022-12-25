<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Lecturers;

class studentController extends Controller
{
    public function index()
    {
        return view('Student.studentHome');
    }

    public function openAddStudent()
    {
        $Students=Students::all() ;
        return view('Student.addStudent')-> with ('students',$Students);
    }

    public function store(Request $request)
    {
        $input = Request::all();
        Students::create($input);
        return redirect('openViewStudent')->with('success',"New Student's Data Added!");
    }

    public function openViewStudent() {
        $Students=Students::all() ;
        return view('Student.viewStudent')-> with ('students',$Students);
    }

    public function destroy($id) {
        Students::destroy ($id);
        return redirect ('openViewStudent') -> with ('success',"Student's Data deleted!");
    }

    public function show($id) {
        $Students = Students::find($id);
        return view ('Student.editStudent') -> with ('students',$Students);
    }

    public function update(Request $request,$id) {
        $Students = Students::find($id);
        $input = Request::all() ;
        $Students -> update ($input);
        return redirect('openViewStudent') -> with ('success',"Student's Info Updated");
    }


}
<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Lecturers;

class supervisorController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return view('errorAccessStudent');
            
        }else {
        return view('Supervisor.supervisorHome');
        }
    }

    public function openAddSupervisor() {
        $Lecturers=Lecturers::all() ;
        return view('Supervisor.addsupervisor')-> with ('lecturers',$Lecturers);
    }

    public function openViewSupervisor() {
        $Lecturers=Lecturers::all() ;
        return view('Supervisor.viewsupervisor')-> with ('lecturers',$Lecturers);
    }

    public function show($id) {
        $lecturers = Lecturers::find($id);
        return view ('Supervisor.updatesupervisor') -> with ('lecturers',$lecturers);
    }

    public function store(Request $request) {
        $input = $request::all();
        Lecturers::create($input);
        return redirect('Supervisor')-> with ('success','New Lecturer Data Added!');
    }

    public function update(Request $request,$id) {
        $Lecturers = Lecturers::find($id);
        $input = Request::all() ;
        $Lecturers -> update ($input);
        return redirect('Supervisor') -> with ('success','Lecturer Info Updated');
    }

    public function destroy($id) {
        Lecturers::destroy ($id);
        return redirect ('Supervisor') -> with ('success','Lecturer Info deleted!');
    }

}

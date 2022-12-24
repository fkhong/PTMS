<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Lecturers;

class titleBookController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return view('errorAccessStudent');
            
        }else {
            $TitleBook = Students::all();
            return view('TitleBook.titleBookHome')-> with ('TitleData',$TitleBook);
        }
    }

    public function edit($id) {
        $TitleBook = Students::find ($id);
        return view ('TitleBook.addTitle') -> with ('TitleData',$TitleBook);
    }

    public function update(Request $request,$id) {

        $TitleBook = Students::find($id);

        $input = Request::all();

        $TitleExist = Students::where('psmtitle', '=', request()->get('psmTitle'))->exists();

        if ($TitleExist ==true) {
            $TitleBook -> update (array('psmCategory' => request()->get('psmCategory')));
            return redirect('TitleBook')-> with ('error', 'Title Exist! Only PSM Category are Updated!');

        }else {
            $TitleBook -> update (array('psmTitle' => request()->get('psmTitle'), 'psmCategory' => request()->get('psmCategory')));
            return redirect('TitleBook') -> with ('success','Title Added!'); 
        }
    
    }

}

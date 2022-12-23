<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}

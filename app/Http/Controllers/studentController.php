<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Lecturers;

class studentController extends Controller
{
    public function index()
    {
        return view('Student.studentHome');
    }
}

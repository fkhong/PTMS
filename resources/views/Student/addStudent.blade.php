@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student Information') }}
</h2>

@endsection

@section('content')

<div class="container">
    <h1 class="fw-bold" style="text-align: center"> Add Student Information</h1> <br><br>
</div>

<div style="display: flex;justify-content: center;padding-bottom:30px;">
    <div class="card" style="width:700px;">
        <div class="card-header text-white" style="background-color: #0d6efd;">Student Information</div>
            <div class="card-body" style="padding:40px;">
                <form action="{{route('Student.store')}}" method="POST">
                    @csrf
                    <label> Matric Number </label> <br>
                    <input type="text" name = "matricNumber" id="matricNumber" class="form-control"></input><br>
                    <label> Student Name </label> <br>
                    <input type="text" name = "name" id="name" class="form-control"></input><br>
                    <label> Email </label> <br>
                    <input type="email" name = "email" id="email" class="form-control"></input><br>
                    <label for="course">Course</label>
                    <select name="course" id="course" class="form-control">
                    <option value="BCS">BCS</option>
                    <option value="BCN">BCN</option>
                    <option value="BCG">BCG</option>
                    </select> <br>
                    <input type="submit" value ="Save" class="btn btn-outline-success"></input>
                    <button type="button"class="btn btn-outline-primary" style="margin:8px;"onclick="window.location='{{ route('Student.index') }}'">Back To Home</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
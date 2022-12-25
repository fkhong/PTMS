@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Update Student's Info") }}
</h2>

@endsection

@section('content')

<div class="card">
    <div class="card-header"> Update Student's Info </div>
        <div class="card-body">
            <form action="{{route('Student.update',['Student'=>$students->id])}}" method="POST">
                @csrf
                @method('PUT')
                <label> Matric No. </label> <br>
                <input type="text" name = "matricNumber" id="matricNumber" class="form-control" value="{{ $students->matricNumber }}" placeholder="{{ $students->matricNumber }}" readonly></input><br>
                <label> Name </label> <br>
                <input type="text" name = "name" id="name" class="form-control" value="{{ $students->name }}"></input><br>
                <label> Email </label> <br>
                <input type="text" name = "email" id="email" class="form-control" value="{{ $students->email }}"></input><br>
                <label for="course">Course</label>
                    <select name="course" id="course" class="form-control" value="{{ $students->course }}">
                    <option value="BCS">BCS</option>
                    <option value="BCN">BCN</option>
                    <option value="BCG">BCG</option>
                    </select> <br>
                <input type="submit" value ="Save Updates" class="btn btn-outline-success"></input>
                <button type="button"class="btn btn-outline-primary" style="margin:8px;"onclick="window.location='{{ route('Student.index') }}'">Back To Home</button>
            </form>
        </div>
    </div>
</div>

@endsection
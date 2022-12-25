@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("View Students' Information") }}
</h2>

@endsection

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

<div style="padding-top:30px;padding-bottom:30px;text-align:center">

       <h2 style="font-size:20px;"><b> List Of Students </b></h2> <br><br>
       
<table class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Matric No.</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->matricNumber }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->course}}</td>
            <td> 
                <button type="button"class="btn btn-outline-primary" onclick="window.location='{{route('Student.show',['Student'=>$item->id])}}'">Update</button>
            </td>
            <td>
                 <div >
                        <form action="{{route('Student.destroy',['Student'=>$item->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                 </div>
            </td>

            
        </tr>
    @endforeach
    </tbody>
</table>
<button type="button"class="btn btn-outline-success" style="margin:8px;"onclick="window.location='{{ route('Student.index') }}'">Back To Home</button>
</div>

@endsection
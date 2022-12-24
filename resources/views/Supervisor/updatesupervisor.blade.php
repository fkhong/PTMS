@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Supervisor') }}
</h2>

@endsection

@section('content')

<div class="card">
    <div class="card-header"> Update Lecturer Info </div>
        <div class="card-body">
            <form action="{{route('Supervisor.update',['Supervisor'=>$lecturers->id])}}" method="POST">
                @csrf
                @method('PUT')
                <label> Staff ID </label> <br>
                <input type="text" name = "staffId" id="staffId" class="form-control" value="{{ $lecturers->staffId  }}" placeholder="{{ $lecturers->staffId }}" readonly></input><br>
                <label> Name </label> <br>
                <input type="text" name = "name" id="name" class="form-control" value="{{ $lecturers->name  }}"></input><br>
                <label> Email </label> <br>
                <input type="text" name = "email" id="email" class="form-control" value="{{ $lecturers->email }}"></input><br>
                <label> Contact </label> <br>
                <input type="text" name = "contact" id="contact" class="form-control" value="{{ $lecturers->contact  }}"></input><br>
                <label> Expertise </label> <br>
                <input type="text" name = "expertise" id="expertise" class="form-control" value="{{ $lecturers->expertise  }}"></input><br>
                <input type="submit" value ="Save" class="btn btn-outline-success"></input>
            </form>
        </div>
    </div>
</div>


@endsection
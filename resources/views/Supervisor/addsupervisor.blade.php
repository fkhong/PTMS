@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Supervisor') }}
</h2>

@endsection

@section('content')


<div class="card">
    <div class="card-header"> Add Lecturer </div>
        <div class="card-body">
            <form action="{{route('Supervisor.store')}}" method="POST">
                @csrf
                
                <label> Staff Id </label> <br>
                <input type="text" name = "staffId" id="staffId" class="form-control"></input><br>
                <label> Name </label> <br>
                <input type="text" name = "name" id="name" class="form-control"></input><br>
                <label> Email </label> <br>
                <input type="email" name = "email" id="email" class="form-control"></input><br>
                <label> Contact </label> <br>
                <input type="text" name = "contact" id="contact" class="form-control"></input><br>
                <label> Expertise </label> <br>
                <input type="text" name = "expertise" id="expertise" class="form-control"></input><br>
                <input type="submit" value ="Save" class="btn btn-outline-success"></input>
                <button type="button"class="btn btn-outline-success" style="margin:8px;"onclick="window.location='{{ route('Supervisor.index') }}'">Back To Home</button>
            </form>
        </div>
    </div>
</div>

@endsection
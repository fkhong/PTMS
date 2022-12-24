@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Title Manage') }}
</h2>

@endsection

@section('content')



<div style="padding-top:30px;padding-bottom:30px;text-align:center">
    <p><b> Assign Supervisor According to Different Category </b></p> <br><br>
    <a href="/openAssignSupervisor"><button type="button" class="btn btn-outline-success">Assign Student Supervisor</button></a> &nbsp
    <a href="/openViewStudentSupervisor"><button type="button" class="btn btn-outline-primary">View Supervisor List</button></a>
</div>
@endsection
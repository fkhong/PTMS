@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Supervisor Home') }}
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
    <p><b> Supervisor Menu </b></p> <br><br>
    <a href="/openAddSupervisor"><button type="button" class="btn btn-outline-success">Add Supervisor</button></a> &nbsp
    <a href="/openViewSupervisor"><button type="button" class="btn btn-outline-primary">View Supervisor List</button></a>
</div>

@endsection
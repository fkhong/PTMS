@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Home') }}
</h2>

@endsection

@section('content')


<div style="padding-top:30px;padding-bottom:30px;text-align:center">
    <p><b> Student Menu </b></p> <br><br>
    <a href="/openAddStudent"><button type="button" class="btn btn-outline-success">Add Student</button></a> &nbsp
    <a href="/openViewStudent"><button type="button" class="btn btn-outline-primary">View Students' List</button></a>
</div>

@endsection
@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Student Supervisor') }}
</h2>

@endsection

@section('content')
<div style="padding-top:30px;padding-bottom:30px;text-align:center">

       <h2 style="font-size:20px;"><b> List Of Lecturers/Supervisors </b></h2>
        <div style="padding-top:35px;padding-bottom:35px;">
            <table >
                <tr>
                    <td style="column-width: 150px;">
                    <a href="/openViewStudentSupervisor"><button type="button" class="btn btn-outline-primary">Full Table</button></a>
                    </td> 
                    <td style="column-width: 650px;"> </td>
                    <td><form class="d-flex" type="get" action="{{ url('/searchExpertise') }}" >
                    <input class="form-control me-2" name ="query" type="search" placeholder="E.g. Machine Learning" aria-label="Search">
                    <button style="width:230px;" class="btn btn-outline-success" type="submit">Search Expertise</button>
                    </form>
                    </td>
                </tr>
            </table>
        </div>
       
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Expertise</th>
            <th>Student Supervised</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($lecturers as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->expertise }}</td>
            <td>{{ $item->studentSupervised1 }},
            {{ $item->studentSupervised2 }},<br>
            {{ $item->studentSupervised3 }},
            {{ $item->studentSupervised4 }}
            </td>
      
        </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection
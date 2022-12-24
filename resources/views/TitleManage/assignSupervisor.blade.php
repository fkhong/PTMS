@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Supervisor') }}
</h2>

@endsection

@section('content')

@if(!empty($successMsg))
  <div class="alert alert-warning"> {{ $successMsg }}</div>
@endif

<div style="padding-top:30px;padding-bottom:30px;text-align:center">
<h2 style="font-size:20px;"><b> List Of Students </b></h2><br>
<a style ="float:right;"href="/openViewStudentSupervisor"><button type="button" class="btn btn-outline-success">View Supervisor Details</button></a><br><br><br>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Matric Number</th>
            <th>Email</th>
            <th>PSM Title</th>
            <th>PSM Category</th>
            <th>Supervisor Name</th>
            <th>Assign</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->matricNumber }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->psmTitle }}</td>
            <td>{{ $item->psmCategory }}</td>
            <td>{{ $item->supervisorName }}</td>
            <td><button onclick="window.location='{{route('TitleManage.show',['TitleManage'=>$item->id])}}'"class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Assign</button></td>
      
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
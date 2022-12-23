@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Supervisor') }}
</h2>

@endsection

@section('content')
<div style="padding-top:30px;padding-bottom:30px;text-align:center">
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
            <td>Test</td>
      
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
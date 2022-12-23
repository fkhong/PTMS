@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Title Booking') }}
</h2>

@endsection

@section('content')
<div class='container'>
    <h1 class="fw-bold"> Title Booking List</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matric Number</th>
                <th>Name</th>
                <th>PSM Title</th>
                <th>PSM Category </th>
                <th>Add Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach($TitleData as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->matricNumber }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->psmTitle }}</td>
                <td>{{ $item->psmCategory }}</td>
                <td>
                    <button type="button"class="btn btn-outline-primary" onclick="window.location='{{route('TitleBook.edit',['TitleBook'=>$item->id])}}'">Add</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
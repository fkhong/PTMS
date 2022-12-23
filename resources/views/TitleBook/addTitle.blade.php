@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Title Booking') }}
</h2>

@endsection

@section('content')
<div class='container'>
    <h1 class="fw-bold"> Add Title</h1>
</div>

<div class="container">
    <button type="button"class="btn btn-outline-primary" onclick="window.location='{{ route('TitleBook.index') }}'">Back To Home</button>
    
</div>

<div class='container'>
    <form action="{{route('TitleBook.update',['TitleBook'=>$TitleData->id])}}" method="POST">
        @csrf
        @method('PUT')
        <br><label> ID </label> <br>
        <input type="text" name = "id" id="id" class="form-control" placeholder="{{ $TitleData->id }}" readonly></input><br>
        
        <label> Matric Number </label> <br>
        <input type="text" name = "matricNumber" id="matricNumber" class="form-control" value="{{ $TitleData->matricNumber  }}" readonly></input><br>
        
        <label> Name </label> <br>
        <input type="text" name = "name" id="name" class="form-control" value="{{ $TitleData->name }}" readonly></input><br>
        
        <label> PSM Title </label> <br>
        <input type="text" name = "psmTitle" id="psmTitle" class="form-control" value="{{ $TitleData->psmTitle  }}"></input><br>
        
        <label> PSM Category </label> <br>
        <input type="text" name = "psmCategory" id="psmCategory" class="form-control" value="{{ $TitleData->psmCategory  }}"></input><br>
        
        <input type="submit" value ="Add" class="btn btn-outline-primary"></input>
    </form>
</div>
    

@endsection
@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Title Booking') }}
</h2>

@endsection

@section('content')

<div class="container">
    <h1 class="fw-bold" style="text-align: center"> Add PSM Title</h1>
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="width:870px;">
    <button type="button"class="btn btn-outline-primary" style="margin:8px;"onclick="window.location='{{ route('TitleBook.index') }}'">Back To Home</button>
</div>

<div style="display: flex;justify-content: center;padding-bottom:30px;">
    <div class="card" style="width:700px;">
        <div class="card-header text-white" style="background-color: #0d6efd;">Add Title</div>
            <div class="card-body" style="padding:40px;">
                <form action="{{route('TitleBook.update',['TitleBook'=>$TitleData->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="form-label"> ID </label> <br>
                    <input type="text" name = "id" id="id" class="form-control" placeholder="{{ $TitleData->id }}" style="border-radius: 10px;" disabled readonly></input><br>
                    
                    <label class="form-label"> Matric Number </label> <br>
                    <input type="text" name = "matricNumber" id="matricNumber" class="form-control" placeholder="{{ $TitleData->matricNumber  }}" style="border-radius: 10px;" disabled readonly></input><br>
                    
                    <label class="form-label"> Name </label> <br>
                    <input type="text" name = "name" id="name" class="form-control" placeholder="{{ $TitleData->name }}" style="border-radius: 10px;" disabled readonly></input><br>
                    
                    <label class="form-label"> PSM Title </label> <br>
                    <input type="text" name = "psmTitle" id="psmTitle" class="form-control" placeholder="{{ $TitleData->psmTitle  }}" style="border-radius: 10px;" ></input><br>
                    
                    <label class="form-label"> PSM Category </label> <br>
                    <select name = "psmCategory" id="psmCategory" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
                        <option selected>Choose a Category</option>
                        <option value="Research Based">Research Based</option>
                        <option value="Project Based">Project Based</option>
                    </select> <br>

                    <input type="submit" value ="Add" class="btn btn-outline-primary"></input>
                </form>
            </div>
        </div>
    </div>
</div>
    

@endsection
@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Supervisor') }}
</h2>

@endsection

@section('content')
<br>

<div style="display: flex;justify-content: center;padding-bottom:30px;">
    <div class="card" style="width:700px;">
        <div class="card-header"> Assign Supervisor for&nbsp <b><i> {{$students->name}} ({{$students->matricNumber}}) </i></b> </div>
            <div class="card-body" style="padding:40px;">
                <form action="{{route('TitleManage.update',['TitleManage'=>$students->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label> Matric Number </label> <br>
                    <input style="border-radius: 10px;" type="text" name = "matricNumber" id="matricNumber" class="form-control" placeholder="{{ $students->matricNumber }}" readonly></input><br>
                    <label> Student Name </label> <br>
                    <input style="border-radius: 10px;" type="text" name = "name" id="name" class="form-control" placeholder="{{ $students->name  }}"readonly></input><br>
                    <label> Student Email </label> <br>
                    <input style="border-radius: 10px;" type="text" name = "email" id="email" class="form-control" placeholder="{{ $students->email }}"readonly></input><br>
                    <label> PSM Title </label> <br>
                    <input style="border-radius: 10px;" type="text" name = "psmTitle" id="psmTitle" class="form-control" placeholder="{{ $students->psmTitle  }}"readonly></input><br>
                    <label> PSM Category </label> <br>
                    <input style="border-radius: 10px;" type="text" name = "psmCategory" id="psmCategory" class="form-control" placeholder="{{ $students->psmCategory  }}"readonly></input><br>
                    <label> Supervisor Name </label> <br>
                    <select name="supervisorName" id = "supervisorName" placeholder="Supervisor Name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
                    @foreach ($lecturers as $data)
                        <option class="dropdown-item" name="supervisorName" value="{{$data -> name}}">{{$data -> name}} , {{$data -> expertise}}</option>
                    @endforeach
                    </select>
                    <p id="Help" class="form-text">* Note that Only Maximum of 4 students can be assigned per Supervisor</p><br>
                    <input type="submit" value ="Assign" class="btn btn-outline-primary"></input>&nbsp&nbsp

                    <a href="/openViewStudentSupervisor"><button type="button" class="btn btn-outline-success">View Supervisor Details</button></a>&nbsp&nbsp
                    <a href="/openAssignSupervisor"><button type="button" class="btn btn-outline-secondary">Back to Student List</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<!--
    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
    -->
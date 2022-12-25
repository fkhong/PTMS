@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Student Profile') }}
</h2>

@endsection

@section('content')

<div class="card">
    <div class="card-header"> View Student Profile </div>
        <div class="card-body">
            <form >
                
                <label> Matric Number </label> <br>
                <input type="text" name = "id" id="id" class="form-control" placeholder="{{ $students->matricNumber }}" readonly></input><br>
                <label> Student Name </label> <br>
                <input type="text" name = "name" id="name" class="form-control" value="{{ $students->name  }}"readonly></input><br>
                <label> Student Email </label> <br>
                <input type="text" name = "address" id="address" class="form-control" value="{{ $students->email }}"readonly></input><br>
                <label> Student Course </label> <br>
                <input type="text" name = "department" id="department" class="form-control" value="{{ $students->course  }}"readonly></input><br>
                <label> PSM Title </label> <br>
                <input type="text" name = "expert" id="expert" class="form-control" value="{{ $students->psmTitle  }}"readonly></input><br>
                <label> PSM Category </label> <br>
                <input type="text" name = "expert" id="expert" class="form-control" value="{{ $students->psmCategory }}"readonly></input><br>
                <label> Supervisor Name </label> <br>
                <input type="text" name = "expert" id="expert" class="form-control" value="{{ $students->supervisorName  }}"readonly></input><br>
                
            </form>
        </div>
    </div>
</div>

@endsection
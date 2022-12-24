@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Supervisor') }}
</h2>

@endsection

@section('content')

<table id="itemList" style="width:100%" class="table">
                    <thead>

                        <tr style="height:45px; " >
                            <th>Staff ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Expertise</th>
                            <th> Delete</th>
                            <th> Update</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lecturers as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->staffId }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->contact }}</td>
                                <td>{{ $item->expertise }}</td>
                                
                                <td>
                                    <div >
                                        <form action="{{route('Supervisor.destroy',['Supervisor'=>$item->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-outline-success" type="submit">Delete</button>

                                        </form>
                                    </div>
                                </td>

                                <td> 
                                <button type="button"class="btn btn-outline-success" onclick="window.location='{{route('Supervisor.show',['Supervisor'=>$item->id])}}'">Update</button>
                                </td>
                                
                                
                            </tr>
                        @endforeach
                    </tbody>
                   


                </table>

@endsection
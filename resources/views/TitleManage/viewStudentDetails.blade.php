@extends('layouts.master')
@section('headings')

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Student Profile') }}
</h2>

@endsection

@section('content')

<div class="card">
    <div class="card-header">&nbsp<b>{{ $students->name }} </b></div>
        <div class="card-body" style="padding:40px;">
        <table style="width:100%;"> 
            <tr> 
               
                <td style="width:40%;text-align: center; vertical-align: middle;"> 
                <div style="margin: 0 auto; width: 170px">
                <img style="border-radius: 100px;height:170px;width: 170px;" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" >
                </div> <br>
                <b style="font-size:20px;">{{ $students->name }} </b> <br>
                <b style="font-size:17px;">{{ $students->matricNumber }} </b> <br>
                {{ $students->email }} 
                </td>

                <td style="font-size:18px;"> 


                <label> Student Course: </label> 
                @if ( $students->course == "BCS" )
                <p style="font-size:18px;"><i> Bachelor Of Computer Science (Software Engineering) With Honours</i></p><br>
                @elseif ( $students->course == "BCN" )
                <p style="font-size:18px;"><i> Bachelor Of Computer Science (Networking) With Honours</i></p><br>
                @elseif ( $students->course == "BCG" )
                <p style="font-size:18px;"><i> Bachelor Of Computer Science (Graphic & Multimedia) With Honours</i></p><br>
                @endif
                <label> PSM Title: </label> <br>
                <p style="font-size:18px;"><i>{{ $students->psmTitle }}  </i></p><br>
                <label> PSM Category: </label> <br>
                <p style="font-size:18px;"><i>{{ $students->psmCategory }}  </i></p><br>
                <table> 
                    <tr> 
                        <td style="width:210px;">
                            <label> Supervisor Name: </label> <br>
                            <p style="font-size:18px;"><i>{{ $students->supervisorName }}</i></p><br> 
                        </td>
                        <td style="width:210px;"> 
                            <label> Supervisor Expertise: </label> <br>
                            <p style="font-size:18px;"><i>{{ $lecturer->expertise }} </i></p><br> 
                        </td>
                        <td > 
                            <label> Supervisor Contact: </label> <br>
                            <p style="font-size:18px;"><i>{{ $lecturer->contact }} </i></p><br> 
                        </td>
                    </tr>
                </table>
                
                
                </td>
            </tr>
            <tr> 
            
            </tr>
        </table>
        <div style="text-align:center;padding-top:30px;"> 
        <a href="/openViewStudentSupervisor" style=""><button type="button" class="btn btn-outline-primary">Back</button></a>
        </div>
        
        
        
        </div>
    </div>
</div>



@endsection
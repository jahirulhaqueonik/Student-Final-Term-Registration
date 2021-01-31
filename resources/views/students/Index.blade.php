@extends('students.layout')

@section('content')

<div>
    <h2 style="text-align:center;margin-top:15px;font-size: 24px;">Final Term Examination Student Informations</h2>
</div>

    @if($message=Session::get('success'))
        <div>
            <p class="alert alert-syccess">{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S_No</th>
            <th>Name</th>
            <th>Id</th>
            <th>Section</th>
            <th>Department</th>
            <th>Batch</th>
            <th>Exam Term</th>
            <th>Payment</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$student->studentname}}</td>
            <td>{{$student->studentid}}</td>
            <td>{{$student->studentsection}}</td>
            <td>{{$student->studentdept}}</td>
            <td>{{$student->studentbase}}</td>
            <td>{{$student->studentexamterm}}</td>
            <td>{{$student->studentpayment}}</td>
            <td>
                <form action="{{route('students.destroy',$student->id)}}" method="POST">
                    <a class="btn btn-primary" href="{{route('students.show', $student->id)}}">show</a>
                    <a class="btn btn-primary" href="{{route('students.edit', $student->id)}}">Update</a>

                    @csrf 
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row" style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.create')}}">Create New Student</a>
        </div>
    </div>
</div>
@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2 style="text-align:center;margin-top:15px">Update Stdent Informations</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input. <br><br>
            <ul>
            @foreach($error->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf 
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentName:</strong>
                <input type="text" name="studentname" value="{{$student->studentname}}" class="form-control" placeholder="studentname">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>StudentId:</strong>
                    <input type="text" name="studentid" value="{{$student->studentid}}" class="form-control" placeholder="studentid">
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Section:</strong>
                <input type="text" name="studentsection" value="{{$student->studentsection}}" class="form-control" placeholder="studentsection">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentBatch:</strong>
                <input type="text" name="studentbatch" value="{{$student->studentbatch}}" class="form-control" placeholder="studentbase">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentDept:</strong>
                <input type="text" name="studentdept" value="{{$student->studentdept}}" class="form-control" placeholder="studentdept">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentExamTerm:</strong>
                <input type="text" name="studentexamterm" value="{{$student->studentexamterm}}" class="form-control" placeholder="studentexamterm">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudentPayment:</strong>
                <input type="text" name="studentpayment" value="{{$student->studentpayment}}" class="form-control" placeholder="studentpayment">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </div>
    </form>
@endsection
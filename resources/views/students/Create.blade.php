@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-12 margin-tb">
        <div>
            <h2 style="text-align:center;margin-top:15px">Entry New Student Informations</h2>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problem with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif
<h3Add New Student></h3>
<form action="{{route('students.store')}}" method = "POST">

    @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Name:</strong>
            <input type="text" name="studentname" class="form-control" placeholder="Full Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Id:</strong>
            <input type="text" name="studentid" class="form-control" placeholder="Id No (xxx-xxx-xxx">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Section:</strong>
            <input type="text" name="studentsection" class="form-control" placeholder="Section">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Batch:</strong>
            <input type="text" name="studentbatch" class="form-control" placeholder="Batch">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Department:</strong>
            <input type="text" name="studentdept" class="form-control" placeholder="Department">
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Exam Term(final):</strong>
            <input type="text" name="studentexamterm" class="form-control" placeholder="Spring/Summer/Autumn">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Payment:</strong>
            <input type="text" name="studentpayment" class="form-control" placeholder="Payment Clear/Due">
        </div>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>
@endsection
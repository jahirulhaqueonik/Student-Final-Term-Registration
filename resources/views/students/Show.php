@extends('students.layout')

@section('content')
<div class='row' style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Student Information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>
<div calss="row" style="text-align:center;background:#FFF5F3;"> 
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student Name:<br></strong>
            {{$student->studentname}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student ID<br></strong>
            {{$student->studentid}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Section<br></strong>
            {{$student->studentsection}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Batch<br></strong>
            {{$student->studentbatch}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Department<br></strong>
            {{$student->studentdept}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Exam Term<br></strong>
            {{$student->studentexamterm}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Payment<br></strong>
            {{$student->studentpayment}}
        </div>
    </div>
</div>
@endsection
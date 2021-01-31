@extends('students.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 style="text-align:center; font-family: rokkitt" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome To Your Deshboard to Maintain Student Exam Registration Data') }}
        </h2>
    </x-slot>




    <div class="pull-right" style="text-align: center">

            <a  class="btn btn-primary"href="{{route('students.create')}}" >Create New Student</a>
            <a  class="btn btn-success" href="http://127.0.0.1:8000/students">Show</a>

    </div>

</x-app-layout>

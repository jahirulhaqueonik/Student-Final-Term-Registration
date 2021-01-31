@extends('students.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 style="text-align:center; font-family: rokkitt" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome To Your Deshboard to Maintain Student Exam Registration Data') }}
        </h2>
    </x-slot>




    <div class="pull-right" style="position:absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">

            <a  class="btn btn-primary"href="{{route('students.create')}}" >Add New Data</a>
            <a  class="btn btn-success" href="http://127.0.0.1:8000/students">Show All Data</a>

    </div>

</x-app-layout>

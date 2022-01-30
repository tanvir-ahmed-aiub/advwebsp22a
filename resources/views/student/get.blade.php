@extends('layouts.app')
@section('content')
    <h1>Student Info</h1>
    <h3>Name: {{$student->name}}</h3>
    <h3>Id: {{$student->id}}</h3>
    <h3>Dob: {{$student->dob}}</h3>

    <h1>The sum is {{$sum}}</h1>
@endsection
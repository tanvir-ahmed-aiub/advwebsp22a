@extends('layouts.app')
@section('content')
    <h1>Student Info</h1>
    <h3>Name: {{$student->name}}</h3>
    <h3>Id: {{$student->id}}</h3>
    <h3>Dob: {{$student->dob}}</h3>
    <h4>Department: {{$student->department->name}}</h4>

    <h1>The sum is {{$sum}}</h1>

    <h1>Course Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Department Name</th>
        </tr>
        @foreach($student->courses as $c)
            <tr>
                <td> {{$c->course->name}}</td>
                <td> {{$c->course->department->name}}</td>
            </tr>        
        @endforeach
    </table>
@endsection
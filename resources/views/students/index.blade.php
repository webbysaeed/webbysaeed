@extends('layouts.app')
@section('content')

    <a href="{{url('/student/create')}}">add category</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
    @foreach($students as $student)
        <tr>
            <td scope="row">{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->address}}</td>
            <td><a href="student/{{$student->id}}/edit">edit</a></td>
            <td><a href="student/{{$student->id}}/delete">delete</a></td>
            <td></td>
        </tr>
    @endforeach
@endsection


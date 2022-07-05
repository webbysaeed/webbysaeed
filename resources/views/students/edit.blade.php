@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('/student/'.$student->id)}}">
        @csrf
        <div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name:</label>
                <input type="text" id="" class="form-control" name="name" value="{{$student->name}}">
                <label for="disabledTextInput" class="form-label">Email:</label>
                <input type="text" id="" class="form-control" name="email" value="{{$student->email}}">
                <label for="disabledTextInput" class="form-label">Address:</label>
                <input type="text" id="" class="form-control" name="address" value="{{$student->address}}">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection

@extends('layouts.app')
@section('content')
    <form method="post" action="{{url('/student/create')}}">
        @csrf
        <div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name:</label>
                <input type="text" id="" class="form-control" name="name">
                <label for="disabledTextInput" class="form-label">Email:</label>
                <input type="text" id="" class="form-control" name="email">
                <label for="disabledTextInput" class="form-label">Address:</label>
                <input type="text" id="" class="form-control" name="address">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection

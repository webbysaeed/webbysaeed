@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{url('/home/'.$subject->id)}}">
                    @csrf
                    <div>
                        <div class="mb-3">
                            <label class="form-label">Name:<input type="text" id="" class="form-control" name="name" value="{{ $subject->name }}">
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

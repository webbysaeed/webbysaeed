@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{url('/subject/create')}}">
                    @csrf
                    <div>
                        <div class="mb-3">
                            <label class="form-label">Name:<input type="text" id="" class="form-control" name="name">
                            </label>
                        </div>

                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

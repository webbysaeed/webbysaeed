@extends('layouts.app')
@section('content')

   <div class="container">
       <div class="row">
           <div class="col-12">
               <a href="{{url('/subject/create')}}" class="btn btn-primary ms-4 mb-4">Add Category</a>
               <table class="table">
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Action</th>
                   </tr>

                   @foreach($subjects as $subject)
                       <tr>
                           <td> {{ $subject->id }} </td>
                           <td> {{ $subject->name }} </td>
                           <td>
                               <a href="home/{{$subject->id}}/edit" class="btn btn-warning">edit</a>
                               <a href="home/{{ $subject->id }}/delete" class="btn btn-danger">delete</a>
                           </td>
                       </tr>
                   @endforeach
               </table>
           </div>
       </div>
   </div>

@endsection

@extends('layouts.main')
@section('content')

<form method="POST" action="{{route('author.update', $author->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
         <h1 style="background:green;color:white;text-size:20px;text-align:center">Edit your data below the table</h1>
          <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" placeholder="Enter Author Name" name="name">
                       <br>
                      <input type="submit"  class="btn btn-primary" value="Edit">
                  </div> 
                  </div>
               </form>
             
@endsection
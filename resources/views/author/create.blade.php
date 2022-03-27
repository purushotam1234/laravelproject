@extends('layouts.main')
@section('content')

	<form method="POST" action="{{route('author.store')}}" enctype="multipart/form-data">
		@csrf

 <h1 style="background:green;color:white;text-size:20px;text-align:center"><b>Name</b></h1>
	<div class="card-body">
                  <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control"  placeholder="Enter author name" name="name">
                    <br><input type="submit" class="btn btn-primary" value="Submit">
                  </div>
  
</form>
@endsection
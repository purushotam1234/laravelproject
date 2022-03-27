@extends('layouts.main')
@section('content')

	<form method="POST" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

     <h1 style="background:green;color:white;text-size:20px;text-align:center">Edit your data below the table</h1>
	<div class="card-body">
                  <div class="form-group">
                    <label for="author_id">author_id</label>
                    <select  class="form-control"  placeholder="Enter author_id" name="author" >
                      @foreach($authors as $author)
                      <option value="{{$author->id}}">{{$author->name}}</option>
                      @endforeach
                    </select>
                    <label for="name">Heading</label>
                    <input type="text" class="form-control"  placeholder="Enter Heading" name="heading">
                    <label for="name">description</label>
                    <textarea class="form-control"  placeholder="Enter Detail" name="description" rows="10" cols="20"></textarea>   

   
                    <label for="category_id">category_id</label>
                    <select  class="form-control"  placeholder="Enter category_id" name="category" >
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  
                   <br>
                    <label for="name">Image</label>
                    <input type="file" class="form-control" name="image">
                     <br>
                    <input type="submit"  class="btn btn-primary" value="Edit">
                  </div>
                </div>
  </form>
@endsection
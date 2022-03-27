@extends('layouts.main')
@section('content')


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          	
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>s.n</th>
                        <th>author_id</th>
                       <th>heading</th>
                      <th>description</th>
                      <th>image</th>
                      <th>category_id</th>
                      <th>action</th>
                    </tr>

                  <a href="{{route('post.create')}}"><h1 style="color:blue;text-align:left;"><b><button type="button" class="btn btn-primary">ADD POST</button></b></h1></a>
                  <br>
                  </thead>
                  

	@foreach($posts as $post)
    <td>{{$loop->iteration}}</td>
  <td>{{ $post->author->name }}</td>
     <td>{{$post->heading}}</td>
		<td>{{$post->description}}</td>
		<td><img src="{{asset('images')}}//{{$post->image}}" width="100px"></td>
    <td> {{$post->category->name}}</td>
    <td>
      <form method="POST" action="{{route('post.destroy',$post->id)}}">
     <a href="{{route('post.edit',$post->id)}}" class="btn btn-success"><img src="{{asset('backend/images/edit.png')}}" height="30" weight="20"></a>
     @csrf
    @method('DELETE')
    <input type="submit"  class="btn btn-primary" value="Delete">
  </form>
  </td>
</tr>
@endforeach
                
                  </tbody>
                </table>
              </div>
    </section>
@endsection







                    
          
               
                

                  
	

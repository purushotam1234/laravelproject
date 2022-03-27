 @extends('layouts.main')
@section('content')

    <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                      <tr>
                         <th>s_n</th>
                      <th>name</th>
                      <th>action</th>
                    </tr>
                    <a href ="{{route('author.create')}}"><h1 style="color:blue;text-align:left;"><b><button type="button" class="btn btn-primary">Add Author</button></b></h1></a>
                </thead>
             @foreach($authors as $author)
    <tr> 
        <td>{{$loop->iteration}}</td>
        <td>{{$author->name}}</td>
           
            <td><form method="POST" action="{{route('author.destroy', $author->id)}}">
                       <a href="{{route('author.edit',$author->id)}}" class="btn btn-success"><img src="{{asset('backend/images/edit.png')}}" height="30" weight="20"></a>
                @csrf
                @method('DELETE')
                 <input type="submit" class="btn btn-primary" value="Delete">
            </td>
          </tr>
             @endforeach
            </table>
        </div>
@endsection

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
                  <a href="{{route('category.create')}}"><h1 style="color:blue;text-align:left;"><b><button type="button" class="btn btn-primary">ADD CATEGORY</button></b></h1></a>
                  <br>
                  </thead>

                  @foreach($categories as $category)
                  <tr>
  <td>{{$loop->iteration}}</td>
     <td>{{$category->name}}</td>
 <td>
   <form method="POST" action="{{route('category.destroy',$category->id)}}">
           <a href="{{route('category.edit',$category->id)}}" class="btn btn-success"><img src="{{asset('backend/images/edit.png')}}" height="30" weight="20"></a>
    @csrf
    @method('DELETE')
     <input type="submit"  class="btn btn-primary" value="Delete">
     </td>
   </tr>
     @endforeach
    </table>
</div>
@endsection

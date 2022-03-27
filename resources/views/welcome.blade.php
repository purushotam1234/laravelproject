<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PURU GAMER</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{asset('frontend/css/main.css')}}" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{asset('frontend/css/skin.css')}}" />
<script type="text/javascript" src="{{asset('frontend/javascript/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/javascript/font.font.js')}}"></script>
<script type="text/javascript">
Cufon.replace('h1, h2, h3, h4, h5, h6', {
    hover: true
});
</script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div id="header" class="box">
    <h1 id="logo">News<span>Portal</span></h1>
    <ul id="nav">
      <li class="current"><a href="index.html">News portal page</a></li>
      <li><a href="subpage.html">Categories</a></li>
      <li>

         @if (Route::has('login'))

                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
    </ul> 
  </div>
  </div>
  
  <div id="section" class="box">
    <div id="content">
      <ul class="articles box">
        <li>
    @foreach($posts as $post)
        <h2>{{$post->author->name}}</h2>
        <h4>{{$post->category->name}}</h4>
        <h3>{{$post->heading}}</h3>
        <p style="font-size:20px"><img src="{{asset('images')}}//{{$post->image}}" alt="" class="f-left" style="width:350px;height:300px;">{{$post->description}}</p>
        <p class="more"><a href="#">Read more &raquo;</a></p>
        @endforeach
         </li>
        </ul>
      </div>
    </div>

<script type="text/javascript">Cufon.now();</script>
<!-- END PAGE SOURCE -->
</body>
</html>
    


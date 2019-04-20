@extends('layouts.app')
@section ('content')
   <h1> posts section</h1>
    @if(count($posts)>0)
      @foreach($posts as $post)
        <div class ="well">
          <div class ="row">
        
           <div class ="col-md-8 col-sm-8">
       <img  style ="width:100%" alt ="image did not upload"  src ="../public/storage/cover_images/{{$post->cover_image}}">
            <h3><a href ="posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>written on{{$post->created_at}}</small>
        </div> 
          </div>
        </div>
      @endforeach
    {{$posts->links()}}
    @else
      <p> No posts found</p>
    @endif  
@endsection
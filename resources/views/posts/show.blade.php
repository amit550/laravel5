@extends('layouts.app')
@section ('content')


 <h1> {{$post->title}}</h1>
 
<div> 
    {{$post->body}}
</div>  
<hr>
<small>written on{{$post->created_at}}</small>
<hr>
<a href ="/phpProject/public/posts/{{$post->id}}/edit" class ="btn btn-default">Edit</a> 
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
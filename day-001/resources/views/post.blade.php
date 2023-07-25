@extends('app')

@section('content')
<div class="container px-3">
  <h1>Post</h1>
  <hr>  
    <h4>{{$post->title}}</h4>
    <p>
      {{ $post->body }}
    </p>
</div>

@endsection
@extends('app')

@section('content')
<div class="container px-3 py-5">
  <h1>Blog</h1>
  <hr>  
  @foreach ($posts as $post)
    <h4>{{$post->title}}</h4>
    <p class="small text-secundary">
      <i>Fecha de publicacion:</i>{{ $post->created_at->format('d-m-Y') }}
      <a href="{{ route('post', $post->slug) }}">ver mas...</a>
    </p>
  @endforeach
</div>
Blog
@endsection
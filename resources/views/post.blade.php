@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>

  <p>By. Aji Nuansa Sengarie <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
 {!! $post->body !!}
</article>

<a href="/blog" class="btn btn-primary text-decoration-none">Back to Posts</a>
    
@endsection


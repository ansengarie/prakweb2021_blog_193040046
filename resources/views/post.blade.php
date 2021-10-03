@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>
 {!! $post->body !!}
</article>

<a href="/blog" class="btn btn-primary text-decoration-none">Back to Posts</a>
    
@endsection


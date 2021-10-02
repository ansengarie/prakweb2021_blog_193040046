@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post['title'] }}</h2>
  <p class="mt-5">{{ $post['body'] }}</p>
</article>

<a href="/blog" class="btn btn-primary text-decoration-none">Back to Posts</a>
    
@endsection
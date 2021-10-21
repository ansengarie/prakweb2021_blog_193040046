@extends('layouts.main')

@section('container')
<!-- Hero section -->
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="mb-5">Welcome to Larav Blog!</h1>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p class="text-muted fw-light mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iusto a sapiente animi provident ullam accusantium suscipit quae atque nisi!</p>
        <a href="/blog" class="btn btn-primary btn-large">See more</a>
      </div>
      <div class="col img-col">
        <img src="https://source.unsplash.com/random/1600x900?notes" class="img-fluid rounded shadow" alt="Software Development">
      </div>
    </div>
  </div>
</section>
<!-- End Hero section -->
@endsection

@include('partials.footer')

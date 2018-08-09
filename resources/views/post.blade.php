@extends('layouts.master')

@section('title', 'Post now')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ URL::asset('img/post-bg.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <h2 class="subheading">{{ $post->sub_title }}</h2>
            <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2018</span>
          </div>
        </div>
      </div>
    </div>
  </header>


    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
            <p>
                  {{ $post->description }}

            </p>
        </div>
      </div>
    </article>

@endsection

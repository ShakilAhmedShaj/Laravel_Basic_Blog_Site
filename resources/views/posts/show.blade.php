@extends('layouts.app')

@section('content')
{{-- <a href="/posts" class="btn btn-default">Back</a>
<button href="/posts" type="button" class="btn btn-primary">Back</button> --}}

<div class="card">
    <div class="card-body">
      <h4 class="card-title">{{$post->title}}</h4>
      <p class="card-text">
        {{$post->body}}
      </p>
      <hr>
      <h6 class="card-subtitle mb-2 text-muted">Written On {{$post->created_at}}</h6>
    </div>
  </div>
  <a href="/posts" class="btn btn-primary" role="button">Back</a>

@endsection
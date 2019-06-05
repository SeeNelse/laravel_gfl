@extends('layout')

@section('content')

  @if($posts)
    @foreach($posts as $key => $post)
      <div class="col-12 mb-3">
        <div class="card">
          <h5 class="card-header">{{ $post['title'] }}</h5>
          <div class="card-body">
            <p class="card-text">{{ $post['body'] }}</p>
            <a href="{{ route('post', $key) }}" class="btn btn-primary">Go to post</a>
          </div>
        </div>
      </div>
    @endforeach
  @endif

@stop
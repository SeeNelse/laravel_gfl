@extends('layout')

@section('content')

  <div class="col-12">
    <div class="card">
      <h5 class="card-header">{{ $post['title'] }}</h5>
      <div class="card-body">
        <p class="card-text">{{ $post['body'] }}</p>
        <a href="{{ route('atricles') }}" class="btn btn-danger">Back</a>
      </div>
    </div>
  </div>

@stop
@extends('layout')

@section('content')

  @if($name)
    <div class="col-12">
      <div class="alert alert-success" role="alert">
        Thank You, {{$name}}!
      </div>
    </div>
  @endif

@stop
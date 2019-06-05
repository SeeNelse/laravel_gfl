@extends('layout')

@section('content')

  @if($urls)
    @foreach($urls as $title=>$url)
      <div class="col-lg-4 justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <a href="{{$url}}" class="btn btn-primary">Go to {{$title}}</a>
          </div>
        </div>
      </div>
    @endforeach
  @endif

@stop
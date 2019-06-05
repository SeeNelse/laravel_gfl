@extends('layout')

@section('content')

  <div class="col-12">
    <form action="submit-form" method="post">
      <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vasya" name='name'>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Text:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='text'></textarea>
      </div>
      @if($error)
      <div class="alert alert-danger" role="alert">
        Fields is not filled!
      </div>
      @endif
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  </div>

@stop
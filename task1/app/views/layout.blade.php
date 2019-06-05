<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Task 1</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark mb-5">
    <div class="container justify-content-between">
      <div style="display: flex;flex-direction: row;">
        <a class="navbar-brand" href="{{ route('root') }}">Laravel - Task 1</a>
        <div class="navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav" style="flex-direction: row;">
            <a style="margin-right: 10px;" class="nav-item nav-link" href="{{route('root')}}">Home</a>
            <a style="margin-right: 10px;" class="nav-item nav-link" href="{{route('atricles')}}">Atricles</a>
            <a style="margin-right: 10px;" class="nav-item nav-link" href="{{route('about')}}">About</a>
            <a style="margin-right: 10px;" class="nav-item nav-link" href="{{route('contact-us')}}">Contact-us</a>
          </div>
        </div>
      </div>
      <a href="https://github.com/SeeNelse/laravel_gfl/tree/master/task1" target="_blank" class="navbar__github"><img style='height: 20px;' src="{{ route('root') }}/img/GitHub-Logo.png" alt="github"></a>
    </div>
  </nav>
  <div class="container pt-5">
    <div class="row">
      @yield('content')
    </div>
  </div>
  <h5 class="text-center mt-3 pt-3 pb-3">Student 8, Dovzhenko Vladislav</h5>
</body>
</html>
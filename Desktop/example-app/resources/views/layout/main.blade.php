<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="{{ asset('css/color.css') }}">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item fw-bold">
            <a class="nav-link fw-bold" href="{{ url('home') }}">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-monospace" href="{{ url('test') }}">Test</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('profile') }}">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('female')}}">Female</a>
          </li>
          <li class="nav-item">
                <a class="nav-link " href="{{ route('male') }}">male</a>
          </li>
          <li class="nav-item">
                <a class="nav-link " href="{{ route('favcust') }}">F‌avcust</a>
         </li>
        </ul>
      </div>
    </nav>
    @yield('content')
    @yield('javascript')
    @yield('footer')
</body>

</html>
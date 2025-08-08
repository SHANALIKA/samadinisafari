<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Samadini Safari Rest Inn</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Custom styles -->
  <link href="{{ asset('css/header.css') }}" rel="stylesheet"/>
</head>

<body>

  <!-- ==================== HEADER NAVIGATION ==================== -->
  <nav class="site-header sticky-top py-2 bg-dark border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
      
      <!-- Left side: Logo + Title -->
      <div class="d-flex align-items-center">
        <!-- Logo -->
        <a class="py-2 mr-2" href="#">
          <img src="{{ asset('images/1.jpg') }}" width="40" height="40" alt="icon"/>
        </a>
        <!-- Site Name -->
        <h4 class="mb-0 font-weight-bold text-uppercase text-white">Samadini Safari Rest Inn</h4>
      </div>

      <!-- Right side: Auth Buttons -->
      <div class="d-flex">
        <a class="btn btn-outline-light btn-sm mr-2" href="{{ url('/signup') }}">Register</a>

        <a class="btn btn-light btn-sm" href="{{ url('/signin') }}">Sign In</a>
      </div>
    </div>
  </nav>

</body>
</html>

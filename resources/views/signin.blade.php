<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META TAGS -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- PAGE TITLE -->
  <title>Sign In - Samadini Safari Rest Inn</title>

  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

  <!-- CUSTOM CSS -->
  <link href="{{ asset('/signin.css') }}" rel="stylesheet" />
</head>

<body>

  <!-- HEADER -->
  @include('partials.header')

  <!-- MAIN SIGN-IN SECTION -->
  <main class="d-flex align-items-center justify-content-center flex-column flex-grow-1" style="min-height: 70vh;">
    
    <section class="form-signin w-100" style="max-width: 400px;">

      <!-- Success message -->
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <!-- Validation errors -->
      @if($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- SIGN-IN FORM -->
      <form method="POST" action="{{ url('/signin') }}">

        @csrf

        <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>

        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input
            type="email"
            id="inputEmail"
            name="email"
            class="form-control"
            placeholder="Email address"
            value="{{ old('email') }}"
            required
            autofocus
          />
        </div>

        <div class="form-group">
          <label for="inputPassword" class="sr-only">Password</label>
          <input
            type="password"
            id="inputPassword"
            name="password"
            class="form-control"
            placeholder="Password"
            required
          />
        </div>

        <div class="checkbox mb-3 text-start">
          <label>
            <input
              type="checkbox"
              name="remember"
              value="remember-me"
              {{ old('remember') ? 'checked' : '' }}
            />
            Remember me
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block w-100" type="submit">
          Sign in
        </button>

        <p class="mt-3 text-center">
          If you don't have an account? <a href="{{ url('/signup') }}">Register</a>
        </p>
      </form>

    </section>

  </main>

  <!-- FOOTER -->
  @include('partials.footer')

</body>

</html>

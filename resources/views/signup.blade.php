<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>SAMADINI SAFARI REST INN</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="{{ asset('css/register.css') }}" rel="stylesheet" />
</head>
<body>
	{{-- Include Header --}}
	@include('partials.header')

	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>

			{{-- Login fb button --}}
			<a href="{{ route('login.facebook') }}" class="btn btn-primary btn-block">
				Login with Facebook
			</a>

			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>

			<form method="POST" action="{{ route('signup.submit') }}">
				@csrf

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					</div>
					<input name="fullname" class="form-control" placeholder="Full name" type="text" required />
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-envelope"></i></span>
					</div>
					<input name="email" class="form-control" placeholder="Email address" type="email" required />
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-phone"></i></span>
					</div>
					<input name="phone" class="form-control" placeholder="Phone number" type="text" required />
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
					<input name="password" class="form-control" placeholder="Create password" type="password" required />
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
					<input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password" required />
				</div> <!-- form-group// -->

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Create Account</button>
				</div> <!-- form-group// -->

				<p class="text-center">
					Have an account? <a href="{{ url('/signin') }}">SIGN-IN</a>
				</p>
			</form>
		</article>
	</div> <!-- card.// -->

	{{-- Include Footer --}}
	@include('partials.footer')
</body>
</html>

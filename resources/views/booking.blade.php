<!DOCTYPE html>
<html lang="zxx">
<head>
  <!-- Required Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Page Title -->
  <title>Booking Form</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
</head>

<body>

  {{-- Include Reusable Header Partial --}}
  @include('partials.header')

  <!-- ===================== BOOKING PAGE WELCOME ===================== -->
  @auth
    <div class="container py-3 text-center">
      <p>You are logged in!</p>
    </div>
  @endauth
  <!-- ================================================================ -->

  <!-- ===================== BOOKING FORM SECTION ===================== -->
  <div class="container py-5">
    <!-- Form Heading -->
    <h2 class="text-center mb-4">Booking Form</h2>

    <!-- Booking Form -->
    <form 
      action="{{ route('bookingform.submit') }}" 
      method="POST" 
      class="mx-auto" 
      style="max-width: 600px;"
    >
      {{-- CSRF Token for Laravel Form Protection --}}
      @csrf

      <!-- Arrival Date -->
      <div class="mb-3">
        <label for="arrival" class="form-label">Arrival Date</label>
        <input 
          type="date" 
          id="arrival" 
          name="arrival_date" 
          class="form-control" 
          required
        >
      </div>

      <!-- Departure Date -->
      <div class="mb-3">
        <label for="departure" class="form-label">Departure Date</label>
        <input 
          type="date" 
          id="departure" 
          name="departure_date" 
          class="form-control" 
          required
        >
      </div>

      <!-- Cabana Number -->
      <div class="mb-3">
        <label for="cabana" class="form-label">Cabana No</label>
        <input 
          type="text" 
          id="cabana" 
          name="cabana" 
          class="form-control" 
          placeholder="Enter Cabana Number" 
          required
        >
      </div>

      <!-- Number of Guests -->
      <div class="mb-3">
        <label for="guests" class="form-label">Number of Guests</label>
        <input 
          type="number" 
          id="guests" 
          name="guests" 
          class="form-control" 
          placeholder="e.g. 2" 
          min="1" 
          required
        >
      </div>

      <!-- Number of Children -->
      <div class="mb-4">
        <label for="children" class="form-label">Number of Children</label>
        <input 
          type="number" 
          id="children" 
          name="children" 
          class="form-control" 
          placeholder="e.g. 1" 
          min="0" 
          required
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="btn btn-primary w-100"
      >
        Submit Booking
      </button>
    </form>

    <!-- Logout Button at the Bottom -->
    @auth
      <div class="mt-4 text-center">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
    @endauth
  </div>
  <!-- ===================== END BOOKING FORM SECTION ===================== -->

  {{-- Include Reusable Footer Partial --}}
  @include('partials.footer')

</body>
</html>

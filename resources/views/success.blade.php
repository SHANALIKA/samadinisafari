<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Page Title -->
    <title>Booking Success</title>
      <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/success.css') }}">

</head>
<body>

    {{-- Include reusable header partial --}}
    @include('partials.header')

    <!-- ===================== SUCCESS MESSAGE ===================== -->
    <div class="success-text">
        🎉 Thank You for booking!
    </div>
    <!-- =================== END SUCCESS MESSAGE ==================== -->

    <!-- SweetAlert2 JS for popup notification -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Display SweetAlert popup if success message exists in session --}}
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session("success") }}',
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif

    {{-- Include reusable footer partial --}}
    @include('partials.footer')

</body>
</html>

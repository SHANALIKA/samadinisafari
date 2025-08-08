<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Samadini Safari Rest Inn, Ampara">
  <meta name="author" content="Samadini">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}">

  <title>Samadini Safari Rest Inn</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/product.css') }}" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  @include('partials.header')

  <!-- Fullscreen Background Video -->
  <div class="video-container">
    <video id="videoPlayer" autoplay muted playsinline controls></video>
    <div class="video-overlay">
      <h1>Samadini Safari Rest Inn</h1>
      <p>Just relaxing, chilling, and making happy memories - home away from home</p>
    </div>
  </div>

  <script>
    const videoPlayer = document.getElementById('videoPlayer');
    const videoSources = [
      "{{ asset('videos/video2.mp4') }}",
      "{{ asset('videos/video3.mp4') }}"
    ];
    let currentVideo = 0;

    function playNextVideo() {
      videoPlayer.src = videoSources[currentVideo];
      videoPlayer.play();
      currentVideo = (currentVideo + 1) % videoSources.length;
    }

    videoPlayer.addEventListener('ended', playNextVideo);
    playNextVideo();
  </script>

  <!-- Hero Section -->
  <section class="text-center my-5 highlight-section">
    <div class="container">
      <h1 class="display-4">Welcome to Samadini Safari Rest Inn</h1>
      <p class="lead">Just relaxing, chilling, and making happy memories - home away from home</p>
      <a class="btn btn-lg btn-success" href="{{ url('/gallary') }}">More</a>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about py-5 bg-light text-center">
    <div class="container">
      <h2 class="mb-4">About Us</h2>
      <p>
        Located just 2km from Ampara town, right on the Ampara-Kandy main road, Samadini Safari Rest Inn is your peaceful escape for relaxation and comfort.
        Whether you're planning a family holiday, a romantic getaway, a group trip, or simply looking for a cozy dining or takeaway experience — we’ve got you covered.
        <br><br>
        Enjoy a warm and welcoming atmosphere surrounded by nature, with easy access to town conveniences. Make lasting memories with us — your home away from home.
      </p>
    </div>
  </section>

  <!-- Contact Info Title -->
  <div class="text-center my-5">
    <h1 class="fw-bold">Contact Info</h1>
  </div>

  <!-- Contact Section with Google Maps -->
  <div class="container custom-container py-5">
    <div class="row">
      <!-- Google Map -->
      <div class="col-md-7 mb-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.349226730334!2d81.66255107365603!3d7.314609013467596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae5193cdc1e5d23%3A0xce61372a33b47a27!2sSamadini%20Safari%20Rest%20Inn!5e0!3m2!1sen!2sro!4v1753323682629!5m2!1sen!2sro"
          width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <!-- Contact Details -->
      <div class="col-md-5 d-flex flex-column justify-content-center">
        <ul class="list-unstyled">
          <li><h2 class="fw-bold">Samadini Safari Rest Inn</h2></li>
          <li class="mt-3"><i class="fas fa-phone-alt me-2"></i> 071 12345678</li>
          <li><i class="fas fa-phone-alt me-2"></i> 077 12345678</li>
          <li class="mt-3"><i class="fas fa-map-marker-alt me-2"></i> Karangawa, Ampara</li>
        </ul>
        <div class="my-4">
          <a href="#" class="me-4"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Nearby Attractions Section -->
  <section class="nearby-attractions-section text-center py-5">
    <div class="container">
      <h1 class="mb-4 text-white fw-bold">Nearby Attractions</h1>
      <div class="row">
        <!-- Repeatable Attraction Card Format -->
        @foreach ([
          ['img' => 'Arugam-Bay.jpg', 'name' => 'Arugam Bay', 'distance' => '45 km'],
          ['img' => 'Samachaitya.jpg', 'name' => 'Samachithya', 'distance' => '20 km'],
          ['img' => 'Rajagala.jpg', 'name' => 'Rajagala', 'distance' => '18 km'],
          ['img' => 'kalmunei.jpg', 'name' => 'Kamune Beach', 'distance' => '40 km'],
          ['img' => 'deegawapiya.jpg', 'name' => 'Deegawapi', 'distance' => '25 km'],
          ['img' => 'buddangala.jpg', 'name' => 'Buddangala', 'distance' => '22 km']
        ] as $attraction)
          <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow">
              <img src="{{ asset('images/' . $attraction['img']) }}" class="card-img-top" alt="{{ $attraction['name'] }}">
              <div class="card-body">
                <h6 class="card-title fw-bold">{{ $attraction['name'] }}</h6>
                <p class="text-muted">{{ $attraction['distance'] }} away</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('partials.footer')

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

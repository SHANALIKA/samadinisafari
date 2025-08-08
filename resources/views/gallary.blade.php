<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SAMADINI SAFARI REST INN</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/gallary.css') }}">
</head>
<body>

    <!-- Include Header -->
    @include('partials.header')

    <!-- Cabanas Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Our Cabanas</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

            <!-- Cabana 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/c3.jpg') }}" class="card-img-top" alt="Cabana 01">
                    <div class="card-body">
                        <h5 class="card-title">Cabana 1</h5>
                        <p><i class="fas fa-swimmer me-2"></i>Privet Pool</p>
                        <p><i class="fas fa-tree me-2"></i>Jungle View</p>
                        <p><i class="fas fa-concierge-bell me-2"></i>Villa Host Service</p>
                        <p><i class="fas fa-bed me-2"></i>One king size bed</p>
                        <p><i class="bi bi-people-fill me-2"></i>Maximum 2 Adults</p>
                        <a class="btn btn-primary" href="{{ url('/signin') }}">
                            <i class="custom-book-btn"></i> Book
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cabana 2 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/c1.jpg') }}" class="card-img-top" alt="Cabana 02">
                    <div class="card-body">
                        <h5 class="card-title">Cabana 2</h5>
                        <p><i class="fas fa-swimmer me-2"></i>Privet Pool</p>
                        <p><i class="bi bi-flower1 me-2"></i>Garden View</p>
                        <p><i class="fas fa-utensils me-2"></i>Outdoor dining</p>
                        <p><i class="fas fa-bed me-2"></i>One king size bed</p>
                        <p><i class="bi bi-people-fill me-2"></i>Maximum 2 Adults</p>
                        <a class="btn btn-primary" href="{{ url('/signin') }}">
                            <i class="custom-book-btn"></i> Book
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cabana 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/c9.jpg') }}" class="card-img-top" alt="Cabana 03">
                    <div class="card-body">
                        <h5 class="card-title">Cabana 3</h5>
                        <p><i class="fas fa-swimmer me-2"></i>Privet Pool</p>
                        <p><i class="fas fa-tree me-2"></i>Jungle View</p>
                        <p><i class="fas fa-concierge-bell me-2"></i>Villa Host Services</p>
                        <p><i class="fas fa-bed me-2"></i>Two king size beds</p>
                        <p><i class="bi bi-people-fill me-2"></i>Maximum 4 Adults</p>
                        <a class="btn btn-primary" href="{{ url('/signin') }}">
                            <i class="custom-book-btn"></i> Book
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cabana 4 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/c6.jpg') }}" class="card-img-top" alt="Cabana 04">
                    <div class="card-body">
                        <h5 class="card-title">Cabana 4</h5>
                        <p><i class="fas fa-swimmer me-2"></i>Privet Pool</p>
                        <p><i class="bi bi-flower1 me-2"></i>Garden View</p>
                        <p><i class="fas fa-concierge-bell me-2"></i>Villa Host Services</p>
                        <p><i class="fas fa-bed me-2"></i>Two king size beds</p>
                        <p><i class="bi bi-people-fill me-2"></i>Maximum 4 Adults</p>
                        <a class="btn btn-primary" href="{{ url('/signin') }}">
                            <i class="custom-book-btn"></i> Book
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Gallery Section -->
    <div class="content-wrapper py-5">
        <div class="container mb-4 text-center">
            <h1 class="display-5 fw-bold">Gallery</h1>
        </div>

        <!-- Bootstrap Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/garden3.jpg') }}" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/room4.jpg') }}" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/resturant4.jpg') }}" class="d-block w-100" alt="Third slide">
                </div>
            </div>

            <!-- Navigation Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

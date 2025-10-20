
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ship Business Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-gold" href="/index.php">
      <i class="bi bi-building me-2"></i>Ship Business Center
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="locations.php">Locations</a>
        </li>
        <li class="nav-item ms-lg-3">
          <a href="contact.php" class="btn btn-gold fw-semibold px-3 py-1">
            <i class="bi bi-envelope me-1"></i> Get in Touch
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
.navbar {
  background-color: #0b2140 !important;
}
.text-gold {
  color: #c59a3d !important;
}
.btn-gold {
  background-color: #c59a3d;
  color: #fff;
  border: none;
}
.btn-gold:hover {
  background-color: #b88a30;
  color: #fff;
}
.nav-link {
  color: #fff !important;
  transition: color 0.3s;
}
.nav-link:hover,
.nav-link.active {
  color: #c59a3d !important;
}
</style>

<!-- Hero Section -->

<section class="hero-section text-center text-light d-flex align-items-center justify-content-center">
  <div class="container">
    <h1 class="display-3 fw-bold mb-3">Welcome to Ship Business Center</h1>
    <p class="lead mb-4">A premium, fully-equipped business hub offering flexible office spaces and modern meeting rooms for professionals and companies.</p>
    <a href="services.php" class="btn btn-gold btn-lg me-2 shadow">Explore Services</a>
    <a href="contact.php" class="btn btn-outline-light btn-lg shadow">Contact Us</a>
  </div>
</section>

<!-- About Section -->

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="img1.webp" class="img-fluid rounded shadow" alt="About Ship Business Center">
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">About Our Business Hub</h2>
        <p class="text-muted">At Ship Business Center, we combine sophistication with functionality. Our mission is to provide fully-equipped office spaces that promote creativity, productivity, and collaboration. Whether you're a freelancer, startup, or enterprise, we have the perfect space for you.</p>
        <a href="about.php" class="btn btn-gold mt-3">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- Services Overview -->

<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Our Premium Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card service-card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="bi bi-building fs-1 text-gold mb-3"></i>
            <h5 class="card-title">Private Offices</h5>
            <p class="card-text text-muted">Fully furnished and customizable office spaces with modern facilities and ergonomic furniture.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="bi bi-people fs-1 text-gold mb-3"></i>
            <h5 class="card-title">Meeting Rooms</h5>
            <p class="card-text text-muted">Professional meeting and conference rooms equipped with the latest technology and comfortable seating.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="bi bi-globe fs-1 text-gold mb-3"></i>
            <h5 class="card-title">Virtual Offices</h5>
            <p class="card-text text-muted">Enjoy a prestigious business address, mail handling, and call answering without physical space.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="services.php" class="btn btn-outline-gold mt-5">View All Services</a>
  </div>
</section>

<!-- Location Section -->

<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Strategic Locations</h2>
    <p class="text-muted mb-5">Our centers are situated in prime business districts to offer convenience and accessibility.</p>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card border-0 shadow-sm">
          <img src="pic2.jpg" class="card-img-top" alt="Downtown Location">
          <div class="card-body">
            <h5 class="card-title">Downtown Center</h5>
            <p class="card-text text-muted">Located in the heart of the city with easy access to transport, dining, and corporate facilities.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 shadow-sm">
          <img src="pic3.jpg" class="card-img-top" alt="Marina Location">
          <div class="card-body">
            <h5 class="card-title">Marina Center</h5>
            <p class="card-text text-muted">A waterfront business hub offering modern amenities and stunning ocean views.</p>
          </div>
        </div>
      </div>
      <a href="locations.php" class="btn btn-gold mt-3">View our current location</a>
  </div>
</section>

<!-- CTA Section -->

<section class="cta-section text-center text-light py-5">
  <div class="container">
    <h2 class="fw-bold mb-3">Ready to Elevate Your Business?</h2>
    <p class="mb-4 lead">Join Ship Business Center and experience a workspace designed for success.</p>
    <a href="contact.php" class="btn btn-gold btn-lg">Get Started</a>
  </div>
</section>


<style>
.hero-section {
  background: linear-gradient(rgba(11, 33, 64, 0.85), rgba(11, 33, 64, 0.85)), url('/assets/img/hero.jpg') center/cover no-repeat;
  height: 90vh;
}
.text-gold { color: #c59a3d; }
.btn-gold { background-color: #c59a3d; color: #fff; border: none; }
.btn-gold:hover { background-color: #b88a30; color: #fff; }
.btn-outline-gold { border: 2px solid #c59a3d; color: #c59a3d; }
.btn-outline-gold:hover { background-color: #c59a3d; color: #fff; }
.service-card:hover { transform: translateY(-5px); transition: 0.3s; }
.cta-section { background: linear-gradient(90deg, #0b2140, #12375b); }
</style>

<!-- Footer -->
<footer class="footer bg-dark text-light pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row gy-4">

      <!-- Company Info -->
      <div class="col-md-4">
        <h5 class="fw-bold text-gold mb-3">
          <i class="bi bi-building me-2"></i>Ship Business Center
        </h5>
        <p class="small text-secondary">
          A premium, fully-equipped business hub offering a variety of office spaces and modern meeting rooms
          for professionals and entrepreneurs.
        </p>
        <p class="small text-secondary mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Muscat, Oman</p>
        <p class="small text-secondary"><i class="bi bi-telephone-fill me-2"></i>+968 9000 0000</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4">
        <h5 class="fw-bold text-gold mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="footer-link">Home</a></li>
          <li><a href="about.php" class="footer-link">About Us</a></li>
          <li><a href="services.php" class="footer-link">Services</a></li>
          <li><a href="locations.php" class="footer-link">Locations</a></li>
          <li><a href="contact.php" class="footer-link">Contact</a></li>
        </ul>
      </div>

      <!-- Social Media -->
      <div class="col-md-4">
        <h5 class="fw-bold text-gold mb-3">Follow Us</h5>
        <div class="d-flex gap-3 fs-5">
          <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/reel/DNH8uV9Myvt/" class="social-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>

    <hr class="border-secondary mt-4 mb-3">

    <div class="text-center small text-secondary">
      © <?php echo date("Y"); ?> Ship Business Center. All rights reserved.
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
.footer {
  background-color: #0b2140 !important;
}
.text-gold {
  color: #c59a3d !important;
}
.footer-link {
  color: #ccc;
  text-decoration: none;
  transition: color 0.3s;
}
.footer-link:hover {
  color: #c59a3d;
}
.social-link {
  color: #ccc;
  transition: color 0.3s;
}
.social-link:hover {
  color: #c59a3d;
}
</style>
</body>
</html>
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
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->

<section class="services-hero text-light text-center d-flex align-items-center justify-content-center">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">Our Premium Services</h1>
    <p class="lead">Explore flexible workspace solutions designed to elevate your business experience.</p>
  </div>
</section>

<!-- Services Overview -->

<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">What We Offer</h2>
    <p class="text-muted mb-5">Ship Business Center provides modern, fully-serviced business facilities with a focus on comfort, technology, and professionalism.</p>

```
<div class="row g-4">
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body p-4">
        <i class="bi bi-building fs-1 text-gold mb-3"></i>
        <h5 class="fw-bold">Private Offices</h5>
        <p class="text-muted">Fully equipped offices with modern furniture, high-speed internet, and customizable layouts to suit your team’s needs.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body p-4">
        <i class="bi bi-people fs-1 text-gold mb-3"></i>
        <h5 class="fw-bold">Meeting Rooms</h5>
        <p class="text-muted">Professional meeting spaces with audio-visual technology and on-demand catering for your business discussions.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body p-4">
        <i class="bi bi-laptop fs-1 text-gold mb-3"></i>
        <h5 class="fw-bold">Co-Working Spaces</h5>
        <p class="text-muted">Flexible desks in a vibrant community setting — ideal for freelancers, startups, and remote teams.</p>
      </div>
    </div>
  </div>
</div>
```

  </div>
</section>

<!-- Premium Features -->

<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Why Choose Us</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="feature-box p-4 shadow-sm bg-white rounded h-100">
          <i class="bi bi-wifi fs-2 text-gold mb-3"></i>
          <h6 class="fw-bold">High-Speed Internet</h6>
          <p class="text-muted small">Seamless connectivity to keep your business running smoothly.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box p-4 shadow-sm bg-white rounded h-100">
          <i class="bi bi-cup-hot fs-2 text-gold mb-3"></i>
          <h6 class="fw-bold">Cofee shop</h6>
          <p class="text-muted small">Relax or network in our comfortable and stylish common areas.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box p-4 shadow-sm bg-white rounded h-100">
          <i class="bi bi-shield-check fs-2 text-gold mb-3"></i>
          <h6 class="fw-bold">24/7 Security</h6>
          <p class="text-muted small">Your safety and privacy are our top priorities at all times.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box p-4 shadow-sm bg-white rounded h-100">
          <i class="bi bi-person-lines-fill fs-2 text-gold mb-3"></i>
          <h6 class="fw-bold">Virtual Office</h6>
          <p class="text-muted small">A prestigious business address and mail handling without physical space.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->

<section class="cta-section text-center text-light py-5">
  <div class="container">
    <h2 class="fw-bold mb-3">Ready to Elevate Your Business?</h2>
    <p class="lead mb-4">Contact us today to book a tour or learn more about our membership plans.</p>
    <a href="/contact.php" class="btn btn-gold btn-lg">Contact Us</a>
  </div>
</section>



<style>
.services-hero {
  background: linear-gradient(rgba(11, 33, 64, 0.8), rgba(11, 33, 64, 0.8)), url('/assets/img/services-bg.jpg') center/cover no-repeat;
  height: 70vh;
}
.text-gold { color: #c59a3d; }
.btn-gold { background-color: #c59a3d; color: #fff; border: none; }
.btn-gold:hover { background-color: #b88a30; color: #fff; }
.cta-section { background: linear-gradient(90deg, #0b2140, #12375b); }
.feature-box:hover { transform: translateY(-5px); transition: 0.3s; }
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
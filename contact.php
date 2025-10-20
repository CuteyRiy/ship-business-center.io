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
<section class="contact-hero text-light text-center d-flex align-items-center justify-content-center">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
    <p class="lead">We’re here to help you with workspace solutions that fit your business.</p>
  </div>
</section>

<!-- Contact Info Section -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Get In Touch</h2>
    <p class="text-muted mb-5">Reach out to us anytime — our team will get back to you shortly.</p>

      <div class="row g-4 mt-4">

  <!-- Call Us Card -->
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100 p-4 text-center">
      <i class="bi bi-telephone fs-1 text-gold mb-3"></i>
      <h5 class="fw-bold">Call Us</h5>
      <p class="mb-1">
        <a href="tel:+96897199193" class="text-muted text-decoration-none">+968 9719 9193</a>
      </p>
      <p class="mb-0">
        <a href="tel:+96894706188" class="text-muted text-decoration-none">+968 9470 6188</a>
      </p>
    </div>
  </div>

  <!-- Email Us Card -->
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100 p-4 text-center">
      <i class="bi bi-envelope fs-1 text-gold mb-3"></i>
      <h5 class="fw-bold">Email Us</h5>
      <p class="mb-0">
        <a href="mailto:shipbc@nspoman.com" class="text-muted text-decoration-none">shipbc@nspoman.com</a>
      </p>
    </div>
  </div>

  <!-- Location Card -->
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100 p-3 text-center">
      <i class="bi bi-geo-alt fs-1 text-gold mb-3"></i>
      <h5 class="fw-bold mb-2">Visit Us</h5>
      <p class="text-muted mb-3">Ship Business Center, Oman</p>
      <div style="border-radius: 10px; overflow: hidden;">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14552.829678650453!2d58.3962744!3d23.5858904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e90bf4b9d65d9d3%3A0xf7c1f33d28d94a9e!2sShip%20Business%20Center!5e0!3m2!1sen!2som!4v1739742052000!5m2!1sen!2som"
          width="100%" 
          height="200" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

</div>

      </div>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<!-- Contact Form Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-4 text-center text-lg-start">Send Us a Message</h2>
        
        <form id="whatsappForm" class="p-4 shadow-sm bg-white rounded">
          <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Full Name</label>
            <input type="text" id="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Email Address</label>
            <input type="email" id="email" class="form-control" placeholder="Your Email" required>
          </div>

          <div class="mb-3">
            <label for="subject" class="form-label fw-semibold">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Message Subject" required>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label fw-semibold">Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Type your message..." required></textarea>
          </div>

          <button type="submit" class="btn btn-gold w-100 py-2 fw-semibold">Send Message via WhatsApp</button>
        </form>
      </div>

      <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(event) {
          event.preventDefault(); // prevent normal form submission

          // Get form values
          const name = document.getElementById('name').value;
          const email = document.getElementById('email').value;
          const subject = document.getElementById('subject').value;
          const message = document.getElementById('message').value;

          // Your WhatsApp number (with country code, no + or spaces)
          const phoneNumber = '96897199193';

          // Create the WhatsApp message text
          const whatsappMessage = 
            `Hello, my name is ${name}%0A` +
            `Email: ${email}%0A` +
            `Subject: ${subject}%0A` +
            `Message: ${message}`;

          // Redirect to WhatsApp
          window.open(`https://wa.me/${phoneNumber}?text=${whatsappMessage}`, '_blank');
        });
      </script>

  


      <div class="col-lg-6">
        <div class="map-container rounded shadow" style="height: 400px; overflow: hidden;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14552.829678650453!2d58.3962744!3d23.5858904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e90bf4b9d65d9d3%3A0xf7c1f33d28d94a9e!2sShip%20Business%20Center!5e0!3m2!1sen!2som!4v1739742052000!5m2!1sen!2som" 
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="cta-section text-center text-light py-5">
  <div class="container">
    <h2 class="fw-bold mb-3">Visit Us Today</h2>
    <p class="lead mb-4">Discover how our premium business spaces can help you grow.</p>
    <a href="locations.php" class="btn btn-gold btn-lg">View Locations</a>
  </div>
</section>



<style>
.contact-hero {
  background: linear-gradient(rgba(11, 33, 64, 0.8), rgba(11, 33, 64, 0.8)), url('/assets/img/contact-bg.jpg') center/cover no-repeat;
  height: 70vh;
}
.text-gold { color: #c59a3d; }
.btn-gold { background-color: #c59a3d; color: #fff; border: none; }
.btn-gold:hover { background-color: #b88a30; color: #fff; }
.cta-section { background: linear-gradient(90deg, #0b2140, #12375b); }
.card:hover { transform: translateY(-5px); transition: 0.3s; }
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
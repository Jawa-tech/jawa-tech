<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jawa-Tech | Paket Internet</title>
  <link rel="icon" href="assets/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
  <!-- Font Modern -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
       <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
        <img src="assets/logo.png" alt="Logo Jawa-Tech" width="32" height="32" style="object-fit: contain;" />
        <span class="fw-bold">Jawa - Tech</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li>
          <li class="nav-item"><a class="nav-link active" href="pricing.php">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <?php if (isset($_SESSION['username'])): ?>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout (<?= htmlspecialchars($_SESSION['username']) ?>)</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Pricing Section -->
  <section class="pricing-section py-5" id="pricing">
    <div class="container text-center">
      <h2 class="fw-bold mb-4 section-title" data-aos="fade-up">Pilih Paket Internet & Jenis Pemasangan</h2>
      <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
        Kami menyediakan layanan pemasangan WiFi dengan beragam paket kecepatan dan harga, untuk kebutuhan pribadi maupun bisnis.
      </p>

      <div class="row g-4 justify-content-center">
        <!-- Paket Rumahan -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card shadow rounded-4 h-100">
            <div class="card-body p-4">
              <h5 class="card-title text-primary">Rumahan - Basic</h5>
              <p class="text-muted">Kecepatan hingga 20 Mbps</p>
              <ul class="list-unstyled mb-3">
                <li>✅ Browsing & Streaming Ringan</li>
                <li>✅ Gratis Modem</li>
                <li>✅ Support 24/7</li>
              </ul>
              <h4 class="fw-bold text-primary">Rp199.000</h4>
              <a href="contact.php" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Paket Keluarga -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card shadow rounded-4 h-100">
            <div class="card-body p-4">
              <h5 class="card-title text-success">Rumahan - Family</h5>
              <p class="text-muted">Kecepatan hingga 50 Mbps</p>
              <ul class="list-unstyled mb-3">
                <li>✅ Multi Perangkat</li>
                <li>✅ Bebas Kuota</li>
                <li>✅ Gratis Instalasi</li>
              </ul>
              <h4 class="fw-bold text-success">Rp299.000</h4>
              <a href="contact.php" class="btn btn-success mt-3">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Paket Gaming -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="card shadow rounded-4 h-100">
            <div class="card-body p-4">
              <h5 class="card-title text-danger">Rumahan - Gaming</h5>
              <p class="text-muted">Kecepatan hingga 100 Mbps</p>
              <ul class="list-unstyled mb-3">
                <li>✅ Ping Rendah</li>
                <li>✅ Unlimited Bandwidth</li>
                <li>✅ Anti Lag</li>
              </ul>
              <h4 class="fw-bold text-danger">Rp499.000</h4>
              <a href="contact.php" class="btn btn-danger mt-3">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Paket Kafe -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="card shadow rounded-4 h-100">
            <div class="card-body p-4">
              <h5 class="card-title text-warning">Kafe / Ruko</h5>
              <p class="text-muted">Kecepatan hingga 75 Mbps</p>
              <ul class="list-unstyled mb-3">
                <li>✅ Koneksi Stabil</li>
                <li>✅ Support Banyak User</li>
                <li>✅ Promo Bisnis</li>
              </ul>
              <h4 class="fw-bold text-warning">Rp399.000</h4>
              <a href="contact.php" class="btn btn-warning mt-3">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Paket Kantor -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card shadow rounded-4 h-100">
            <div class="card-body p-4">
              <h5 class="card-title text-dark">Kantor - Premium</h5>
              <p class="text-muted">Kecepatan hingga 150 Mbps</p>
              <ul class="list-unstyled mb-3">
                <li>✅ VPN Ready</li>
                <li>✅ IP Publik</li>
                <li>✅ SLA 99%</li>
              </ul>
              <h4 class="fw-bold text-dark">Rp899.000</h4>
              <a href="contact.php" class="btn btn-dark mt-3">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Promo tambahan -->
      <div class="mt-5" data-aos="fade-up" data-aos-delay="700">
        <p class="fw-semibold text-warning text-center">🏱 GRATIS INSTALASI & MODEM untuk semua paket!</p>
        <p class="text-muted text-center">*Promo berlaku hingga akhir bulan ini</p>
      </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4 section-title">Apa Kata Mereka?</h2>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <!-- Testimoni 1 -->
        <div class="carousel-item active">
          <div class="card mx-auto" style="max-width: 700px;">
            <div class="card-body text-center">
              <p class="card-text">"Pelayanan sangat cepat dan teknisinya ramah. Saya di Bekasi Timur, sekarang internet lancar banget!"</p>
              <h6>Rina A.</h6>
              <small>Bekasi Timur</small>
            </div>
          </div>
        </div>

        <!-- Testimoni 2 -->
        <div class="carousel-item">
          <div class="card mx-auto" style="max-width: 700px;">
            <div class="card-body text-center">
              <p class="card-text">"Pasang buat usaha kecil saya di Tambun, koneksi stabil. Mantap pokoknya!"</p>
              <h6>Andi R.</h6>
              <small>Tambun Selatan</small>
            </div>
          </div>
        </div>

        <!-- Testimoni 3 -->
        <div class="carousel-item">
          <div class="card mx-auto" style="max-width: 700px;">
            <div class="card-body text-center">
              <p class="card-text">"Sempat ragu, tapi ternyata WiFi-nya kenceng banget. Terima kasih untuk pemasangannya!"</p>
              <h6>Lina M.</h6>
              <small>Bekasi Barat</small>
            </div>
          </div>
        </div>

      </div>

      <!-- Optional Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Berikutnya</span>
      </button>
    </div>
  </div>
</section>

  <!-- Review Form -->
  <section class="py-5" style="background-color: #111;">
    <div class="container">
      <div class="review-form">
        <h4 class="text-center">Tulis Ulasan Anda</h4>
        <form action="submit_review.php" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Anda</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
          </div>
          <div class="mb-3">
            <label for="ulasan" class="form-label">Ulasan</label>
            <textarea class="form-control" id="ulasan" name="ulasan" rows="4" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Rating</label>
            <select class="form-control" name="rating" required>
              <option value="5">⭐⭐⭐⭐⭐ (5)</option>
              <option value="4">⭐⭐⭐⭐ (4)</option>
              <option value="3">⭐⭐⭐ (3)</option>
              <option value="2">⭐⭐ (2)</option>
              <option value="1">⭐ (1)</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-warning">Kirim Ulasan</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 text-center bg-dark text-light">
    <div class="container">
      <p class="mb-1">&copy; 2025 Jawa-Tech. All rights reserved.</p>
      <p>
        📧 <a href="mailto:blueskyy331@gmail.com">blueskyy331@gmail.com</a> |
        📞 <a href="tel:+6281298652799">+62 812-9865-2799</a> |
        📍 Jl. Lkr. Utara No.8, Perwira, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17124
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>AOS.init();</script>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const animatedEls = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
        }
      });
    }, { threshold: 0.1 });
    animatedEls.forEach(el => observer.observe(el));
  });
</script>

</body>
</html>


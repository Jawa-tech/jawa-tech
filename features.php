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
  <title>Jawa-Tech | Fitur Layanan</title>
  <link rel="icon" href="assets/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- AOS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- Custom CSS -->
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
          <li class="nav-item"><a class="nav-link active" href="features.php">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
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

  <!-- Features Section -->
  <section class="py-5 bg-dark text-light features-section">
    <div class="container">
      <h2 class="text-center fw-bold section-title" data-aos="fade-down">Kenapa Pilih Layanan Kami?</h2>
      <div class="row g-4">

        <!-- Fitur 1 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="text-center">
            <div class="feature-icon mb-3">⚡</div>
            <h5>Instalasi Super Cepat</h5>
            <p>Pemasangan WiFi dilakukan dalam waktu kurang dari 24 jam setelah pemesanan.</p>
          </div>
        </div>

        <!-- Fitur 2 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="text-center">
            <div class="feature-icon mb-3">📞</div>
            <h5>Support 24/7 via WA</h5>
            <p>Layanan pelanggan selalu tersedia kapan saja, termasuk hari libur dan malam hari.</p>
          </div>
        </div>

        <!-- Fitur 3 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="text-center">
            <div class="feature-icon mb-3">💰</div>
            <h5>Harga Transparan</h5>
            <p>Tidak ada biaya tersembunyi. Apa yang Anda lihat, itulah yang Anda bayar.</p>
          </div>
        </div>

        <!-- Fitur 4 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="text-center">
            <div class="feature-icon mb-3">🌐</div>
            <h5>Koneksi Stabil</h5>
            <p>Jaringan WiFi stabil, cocok untuk streaming, gaming, dan video call tanpa gangguan.</p>
          </div>
        </div>

        <!-- Fitur 5 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="text-center">
            <div class="feature-icon mb-3">📦</div>
            <h5>Paket Beragam</h5>
            <p>Dari kosan sampai kantor besar, kami punya solusi internet untuk semua kebutuhan.</p>
          </div>
        </div>

        <!-- Fitur 6 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="text-center">
            <div class="feature-icon mb-3">🛠️</div>
            <h5>Teknisi Berpengalaman</h5>
            <p>Teknisi profesional dan ramah yang siap membantu Anda dengan cepat dan tepat.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 text-center bg-dark text-light">
    <div class="container">
      <p class="mb-1">&copy; 2025 Jawa-Tech. All rights reserved.</p>
      <p>
        📧 <a href="mailto:blueskyy331@gmail.com">blueskyy331@gmail.com</a> |
        📞 <a href="tel:+6281298652799">+62 812-9865-2799</a>
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

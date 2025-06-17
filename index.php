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
  <title>Jawa-Tech | Home</title>
  <link rel="icon" href="assets/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" >
</head>
<body>
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
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li>
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

  <!-- Hero -->
  <section class="hero d-flex justify-content-center text-center position-relative overflow-hidden">
    <video autoplay loop muted playsinline class="bg-video">
      <source src="assets/bg.mp4" type="video/mp4">
      Browser tidak mendukung video.
    </video>
    <div class="overlay"></div>
    <div class="container d-flex flex-wrap align-items-center justify-content-center gap-5 text-white text-center text-md-start" data-aos="fade-up" style="position: relative; z-index: 1; max-width: 1000px;">
      <div>
        <h1 class="display-4 fw-bold">Pasang WiFi Cepat & Mudah</h1>
        <p class="lead">Layanan internet rumah dan kantor dengan harga terjangkau dan proses cepat.</p>
        <a href="pricing.php" class="btn btn-warning btn-lg mt-4">Lihat Paket</a>
      </div>
    </div>
  </section>
<!-- Info WiFi -->
  <section class="py-5" id="wifi-info">
    <div class="container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2 class="section-title">Penggunaan Jaringan WiFi di Indonesia</h2>
        <p class="text">Bagaimana internet memengaruhi kehidupan sehari-hari masyarakat Indonesia?</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6" data-aos="fade-right">
          <img src="assets/wifis.jpg" alt="Penggunaan WiFi Indonesia" class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-md-6 d-flex align-items-center" data-aos="fade-left">
          <div>
            <h4 class="text-warning">Pertumbuhan Pesat Koneksi Rumah & UMKM</h4>
            <p>Dalam beberapa tahun terakhir, penggunaan WiFi di Indonesia meningkat drastis. Rumah tangga dan UMKM mulai memanfaatkan internet tidak hanya untuk hiburan, tetapi juga untuk belajar online, bekerja dari rumah, dan transaksi digital.</p>
            <h5 class="text-warning mt-4">Fakta Menarik:</h5>
            <ul class="list-unstyled">
              <li>📈 Lebih dari 70% rumah tangga di kota besar telah memiliki WiFi.</li>
              <li>📱 UMKM kini bergantung pada koneksi stabil untuk transaksi & pemasaran digital.</li>
              <li>🎓 Pendidikan daring mendorong permintaan WiFi di area pinggiran.</li>
              <li>🌐 Pemerintah terus memperluas jaringan internet ke desa dan wilayah terpencil.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tren WiFi -->
  <section class="py-5" id="wifi-trend">
    <div class="container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2 class="section-title">Tren dan Masa Depan WiFi di Indonesia</h2>
        <p class="text">Apa saja perkembangan dan inovasi yang sedang terjadi di dunia konektivitas digital Indonesia?</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 d-flex align-items-center" data-aos="fade-right">
          <div>
            <h4 class="text-warning">Teknologi Terbaru</h4>
            <ul class="list-unstyled">
              <li>📶 WiFi 6 kini mulai diadopsi oleh penyedia layanan internet untuk kecepatan lebih tinggi & efisiensi.</li>
              <li>🏙️ Smart City di kota besar seperti Jakarta, Surabaya & Bandung mengintegrasikan WiFi publik untuk transportasi & keamanan.</li>
              <li>📡 Pemerintah dan swasta mulai menggelar jaringan fiber optik ke lebih dari 30.000 desa.</li>
            </ul>
            <h4 class="text-warning mt-4">Kebutuhan Masyarakat</h4>
            <ul class="list-unstyled">
              <li>👨‍💻 Meningkatnya tren kerja remote & hybrid membutuhkan WiFi yang cepat dan stabil.</li>
              <li>🎮 Gamer & streamer mengandalkan koneksi rendah-latensi untuk pengalaman tanpa gangguan.</li>
              <li>📚 E-learning & kursus online memperluas akses pendidikan ke seluruh pelosok Indonesia.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <img src="assets/speedt.jpg" alt="Tren WiFi Indonesia" class="img-fluid rounded-4 shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Promo -->
  <section class="promo-slider">
  <div class="container-fluid">
    <div class="slider-track">
      <div class="slider-item">🔥 Diskon 20% untuk pelanggan baru!</div>
      <div class="slider-item">🎉 Gratis instalasi hingga akhir bulan ini!</div>
      <div class="slider-item">🚀 Nikmati kecepatan hingga 100 Mbps!</div>
      <div class="slider-item">💰 Paket hemat mulai Rp199.000/bulan!</div>
      <!-- Duplikat untuk looping mulus -->
      <div class="slider-item">🔥 Diskon 20% untuk pelanggan baru!</div>
      <div class="slider-item">🎉 Gratis instalasi hingga akhir bulan ini!</div>
      <div class="slider-item">🚀 Nikmati kecepatan hingga 100 Mbps!</div>
      <div class="slider-item">💰 Paket hemat mulai Rp199.000/bulan!</div>
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

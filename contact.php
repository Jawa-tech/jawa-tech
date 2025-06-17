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
  <title>Jawa-Tech | Kontak & FAQ</title>
  <!-- Font Modern -->
   <link rel="icon" href="assets/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
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
        <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout (<?= htmlspecialchars($_SESSION['username']) ?>)</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
          <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-dark text-light text-center">
  <div class="container" data-aos="fade-up">
    <h2 class="fw-bold mb-4 section-title">Hubungi Kami</h2>
    <p>📧 <a href="mailto:blueskyy331@gmail.com">blueskyy331@gmail.com</a></p>
    <p>📞 <a href="tel:+6281298652799">+62 812-9865-2799</a></p>
    <p>📍 Jl. Lkr. Utara No.8, Perwira, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17124</p>
    <a href="https://api.whatsapp.com/send?phone=6281298652799&text=Hallo,%20Saya%20ingin%20bertanya%20tentang%20produk%20anda" class="btn btn-warning mt-3" target="_blank">Chat WhatsApp Kami</a>
  </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-4">Pertanyaan Umum (FAQ)</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            Berapa lama proses pemasangan setelah pemesanan?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Proses pemasangan biasanya dilakukan dalam waktu 1×24 jam setelah konfirmasi pemesanan via WhatsApp atau formulir.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Apakah ada biaya tambahan selain harga paket?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Tidak. Semua paket sudah termasuk instalasi dan modem standar. Biaya tambahan hanya berlaku jika ada permintaan khusus.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            Apakah bisa upgrade kecepatan di kemudian hari?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, Anda bisa upgrade paket kapan saja dengan menghubungi tim kami. Proses upgrade hanya butuh waktu beberapa jam.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            Apakah tersedia support teknis 24/7?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, kami menyediakan support teknis 24 jam setiap hari, termasuk hari libur, melalui WhatsApp dan email.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Google Maps -->
<div class="map-responsive mt-4 rounded shadow">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.895452840405!2d107.00309563796655!3d-6.204519659098728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698951a1c56c9f%3A0xba614a42161711ad!2sBSI%20Square%20Kaliabang!5e0!3m2!1sen!2sid!4v1749050792090!5m2!1sen!2sid"
    width="100%"
    height="350"
    style="border:0; border-radius: 10px;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

<!-- Floating WhatsApp Button -->
<div class="floating-wa">
  <a href="https://wa.me/6281298652799" target="_blank" aria-label="Chat via WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp Button">
  </a>
</div>

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


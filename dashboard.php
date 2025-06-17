<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard | Jawa-Tech</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Jawa-Tech</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container dashboard-container mt-5">
  <h1 class="dashboard-title text-center mb-4">Selamat Datang di Dashboard</h1>
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card p-3">
          <h5>Paket Aktif</h5>
          <p>Paket 100Mbps Unlimited</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card p-3">
          <h5>Status</h5>
          <p>Aktif</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card p-3">
          <h5>Tagihan</h5>
          <p>Rp 350.000 / bulan</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Jawa-Tech. All rights reserved.
  </footer>
</body>
</html>

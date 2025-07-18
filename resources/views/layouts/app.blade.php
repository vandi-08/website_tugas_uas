<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'BlazkStore')</title>

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Custom Dark Theme --}}
  <style>
    body {
      background-color: #111;
      color: white;
      font-family: Arial, sans-serif;
    }

    .card,
    .table {
      background-color: #222;
      color: white;
      border: 1px solid #333;
    }

    .btn-success {
      background-color: #28a745;
      border: none;
    }

    .image-wrapper {
      width: 100%;
      aspect-ratio: 1 / 1;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #000;
      border-bottom: 1px solid #333;
    }

    .image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h2, h5, p {
      color: white;
    }

    .navbar .nav-link {
      color: rgba(255, 255, 255, 0.8);
    }

    .navbar .nav-link:hover {
      color: #fff;
    }
  </style>
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">BlazkStore</a>
      <ul class="navbar-nav flex-row">
        <li class="nav-item mx-2"><a class="nav-link" href="/">Produk</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="/cart">Keranjang</a></li>
        <li class="nav-item mx-2"><a class="nav-link" href="/about">Tentang Kami</a></li> {{-- ✅ Tambahan menu --}}
      </ul>
    </div>
  </nav>

  {{-- Content --}}
  <div class="container py-4">
    @yield('content')
  </div>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

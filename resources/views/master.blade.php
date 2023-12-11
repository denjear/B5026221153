<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">5026221153 Faiz Musyaffa Ramadhan</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Landing Page</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Kumpulan Database
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/pegawai">Database Pegawai</a>
        <a class="dropdown-item" href="/nilaikuliah">Database Nilai Kuliah</a>
        <a class="dropdown-item" href="/keranjangbelanja">Database Belanja</a>
        <a class="dropdown-item" href="/dvd">Tugas Pra EAS</a>
      </div>
    </li>
  </ul>
</nav>
<br>

<div class="container">
  @yield('konten')
</div>

@include('footer')
</body>
</html>

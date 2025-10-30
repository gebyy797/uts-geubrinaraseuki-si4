<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>

table.no-border th, 
table.no-border td {
    border-left: none;
    border-right: none;
    border-top: none;
    border-bottom: 1px solid #a0a0a0; 
    padding: 8px 12px; 
}

  table.no-border thead th {
      background-color: #d1deec;
      color: black;
  }

  table.no-border tbody tr:nth-child(odd) td {
      background-color: #b7cde5;
  }

  table.no-border tbody tr:nth-child(even) td {
      background-color: #d1deec;
  }

  table.no-border td, 
  table.no-border th {
      color: black;
  }

   .navbar {
      background-color: #f2f2f2; 
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); 
  }

  .navbar-toggler {
      border: 2px solid #d1d1d1; 
  }
  
  </style>
</head>
    
<body style="background-color: #ffffff;">

<nav class="navbar navbar-light" style="background-color: #ffffff;">
  <div class="container-fluid d-flex justify-content-between">
      <span class="navbar-brand mb-0 h1 text-dark">UTS Laravel</span>
      <button class="navbar-toggler border-0" type="button"
          data-bs-toggle="offcanvas" data-bs-target="#sideBarCanvas">
          <span class="navbar-toggler-icon"></span>
      </button>
  </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="sideBarCanvas" style="background-color:#f7f7f7;">
  <div class="offcanvas-header" style="background-color:#e0e0e0;">
      <h5 class="offcanvas-title">UTS Laravel</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
      <p><a href="/" class="text-decoration-none text-dark">Home</a></p>
      <p><a href="/produk" class="text-decoration-none text-dark">Produk</a></p>
  </div>
</div>

<div class="container mt-1">
  <div class="d-flex align-items-center mb-2" style="gap: 565px; margin-left: 48px;">
      <h1 class="mb-0 text-dark">Halaman Produk</h1>
      <a href="/produk/tambah" class="btn btn-primary shadow-sm">Tambah Produk</a>
  </div>

  <table class="table no-border ms-5" style="width: 90%; color:black">
      <thead>
          <tr>
              <th>Kode Produk</th>
              <th>Nama Produk</th>
              <th>Jenis Produk</th>
              <th>Harga</th>
          </tr>
      </thead>
      <tbody>
          @for ($i = 0; $i < count($produk); $i++)
              <tr>
                  <td>{{ $produk[$i]['kode'] }}</td>
                  <td>{{ $produk[$i]['nama'] }}</td>
                  <td>{{ $produk[$i]['jenis'] }}</td>
                  <td>{{ $produk[$i]['harga'] }}</td>
              </tr>
          @endfor
      </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

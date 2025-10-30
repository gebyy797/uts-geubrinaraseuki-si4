<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #ffffff;">

    <nav class="navbar navbar-light" style="background-color: #ffffff; border: none; box-shadow: none;">
        <div class="container-fluid d-flex justify-content-between">
            <span class="navbar-brand mb-0 h1 text-dark">UTS Laravel</span>

            <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#sideBarCanvas" aria-controls="sideBarCanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="sideBarCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">UTS Laravel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <p><a href="/" class="text-decoration-none text-dark">Home</a></p>
            <p><a href="/produk" class="text-decoration-none text-dark">Produk</a></p>
            
            <form class="d-flex mt-3">
                <input class="form-controll mt-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success ms-3 mt-2" type="button">Search</button>
            </form>
        </div>
    </div>

    <div class="container-fluid">
        <h1 style="margin-left: 130px; margin-top: 0px; color: #000;">Halaman Home</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

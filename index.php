<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - Pengelolaan ATK</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <!-- Header -->
    <nav class="header-background navbar navbar-expand-lg shadow p-3 position-relative ">
      <div class="container-fluid">
        <a class="tulisan-putih navbar-brand" href="./index.php" style="font-size:30px; font-weight:700;">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse position-absolute end-0" id="navbarSupportedContent" style="margin-Right:8%">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="tulisan-putih nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Master
              </a>
              <ul class="menu dropdown-menu ">
                <li><a class="dropdown-item" href="./JenisATK.php" style="color: rgb(82, 82, 82);">Jenis ATK</a></li>
                <li><a class="dropdown-item" href="./Vendor.php" style="color: rgb(82, 82, 82);">Vendor</a></li>
                <!-- <li><hr class="dropdown-divider"></li> -->
                <li><a class="dropdown-item" href="./ATK.php" style="color: rgb(82, 82, 82);">ATK</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Batas Akhir Header -->

    <!-- Body Home Page -->
    <section>
    <div class="container text-center position-absolute top-50">
        <div class="row">
            <div class="col">
                1 of 2
            </div>
            <div class="col">
                2 of 2
            </div>
        </div>
    </div>
    </section>
    
    <!-- Bootstrap js -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"
    ></script>
</body>
</html>
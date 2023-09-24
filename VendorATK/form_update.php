<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor ATK</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous"
    >
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Header -->
    <section>
      <nav class="header-background navbar navbar-expand-lg shadow p-3 position-relative ">
        <div class="container-fluid">
          <a class="tulisan-putih navbar-brand" href="../index.php" style="font-size:30px; font-weight:700;">HOME</a>
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
                  <li><a class="dropdown-item" href="../JenisATK.php" style="color: rgb(82, 82, 82);">Jenis ATK</a></li>
                  <li><a class="dropdown-item" href="../Vendor.php" style="color: rgb(82, 82, 82);">Vendor</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  <li><a class="dropdown-item" href="../ATK.php" style="color: rgb(82, 82, 82);">ATK</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- Batas Akhir Header -->
    <?php 

        $id_vendor = $_GET['id_vendor'];

        $filename = "../Data/dataVendorATK.txt";
        $fp = fopen($filename, "r") or die ("Unable to open file!");
        if($fp) {
            while(($line = fgets($fp)) !== false){
                $arr_data = explode('|', $line);
                if($arr_data[0] == $id_vendor) {
                    echo "
                    <section class='section-body-update'>
                        <div class='card ' style='width: 30%;'>
                            <div class='card-body'>
                                <h2 style='margin-Left:15%; '>UPDATE JENIS ATK</h2>
                                <form name='myform' action='./save_update.php?id_vendor=$arr_data[0]' method='post'>
                                    <div class='modal-body'>
                                        <input type='text' name='id_vendor' value='<?php echo $arr_data[0]; ?>' style='display: none;'>
                                        Nama Vendor    :  <br /><input type='text' name='nama_vendor' value='$arr_data[1]' required> <br />
                                        Alamat Vendor  :  <br /><input type='text' name='alamat_vendor' value='$arr_data[2]' required> <br />
                                        Telepon Vendor :  <br /><input type='text' name='telp_vendor' value='$arr_data[3]' required> <br />
                                        Email Vendor   :  <br /><input type='email' name='email_vendor' value='$arr_data[4]' required> <br />
                                    </div>
                                    <div class='modal-footer' >
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal' style='margin-Right: 2%' ><a href='../Vendor.php' style='text-decoration: none; color: white;'>Close</a></button>
                                        <button type='submit' value='Update' name='update' class='btn btn-primary'>Save Updates</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </section>
                    ";
                }
            }
        }
        fclose($fp );
    ?>

    
    <!-- Bootstrap js -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"
    ></script>
</body>
</html>
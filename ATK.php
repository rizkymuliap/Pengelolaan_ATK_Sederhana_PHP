<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Tulis Kantor</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous"
    >
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Header -->
    <section>
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
    </section>
    <!-- Batas Akhir Header -->

    <section class="section-body">
        <h1 style="margin-Left:20%; ">PENGELOLAAN ATK</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-Left:60%; margin-Bottom:1%;">
            <i class="bi bi-plus-circle"></i> Tambah ATK
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="display:flex; justify-Content:center; align-items:center">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Alat Tulis Kantor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form name="myform" action="./ATK/save_input.php" method="post">
                <div class="modal-body">
                    Nama ATK    :  <br /><input type="text" name="nama_atk" required> <br />

                    <!-- //Memilih jenisATK dan menyimpan ID jenisATKnya dari sini -->
                    Jenis ATK: <br />
                    <select name="id_jenis_atk" required style="width: 25vh;">
                        <option value="" disabled selected>-- Pilih Jenis ATK --</option>
                        <?php 
                          $filename = './Data/dataJenisATK.txt';
                          $handle = fopen($filename, "r") or die ("Unable to open file!");
                          if($handle) {
                              $no = 1;
                              while(($line = fgets($handle)) !== false){
                                  $arr_data = explode('|', $line);
                                  if($arr_data[2] == 1){
                                    echo "<option value='$arr_data[0]'>$arr_data[1]</option>";
                                  }

                              }
                          }
                          fclose($handle);
                        ?>
                    </select> <br />

                    <!-- //Memilih jenisATK dan menyimpan ID jenisATKnya dari sini -->
                    Vendor ATK: <br />
                    <select name="id_vendor" required style="width: 25vh;">
                        <option value="" disabled selected>-- Pilih Vendor ATK --</option>
                        <?php 
                          $filename = './Data/dataVendorATK.txt';
                          $handle = fopen($filename, "r") or die ("Unable to open file!");
                          if($handle) {
                              $no = 1;
                              while(($line = fgets($handle)) !== false){
                                  $arr_data = explode('|', $line);
                                  if($arr_data[5] == 1){
                                    echo "<option value='$arr_data[0]'>$arr_data[1]</option>";
                                  }

                              }
                          }
                          fclose($handle);
                        ?>
                    </select> <br />
                    
                    Jumlah Stock  :  <br /><input type="text" name="jml_stok" required> <br />
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" value="Save" name="simpan" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="card ">
          <div class="card-body">
            <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama ATK</th>
                    <th scope="col">Jenis ATK</th>
                    <th scope="col">Vendor</th>
                    <th scope="col">Jumlah Stock</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php 
                    $filename = './Data/dataATK.txt';
                    $handle = fopen($filename, "r") or die ("Unable to open file!");
                    if($handle) {
                        $no = 1;
                        while(($line = fgets($handle)) !== false){
                            $arr_data = explode('|', $line);
                            if($arr_data[5] == 1){
                            echo "
                                <tr>
                                    <th scope='row'>$no</th>
                                    <td style='display: none;'>$arr_data[0]</td>
                                    <td>$arr_data[1]</td> ";

                                    // Jenis ATK
                                    $fileJenis = './Data/dataJenisATK.txt';
                                    $handleJenis = fopen($fileJenis, "r") or die ("Unable to open file!");
                                    if($handleJenis) {
                                        while(($line = fgets($handleJenis)) !== false){
                                          $arr_dataJenis = explode('|', $line);
                                            if($arr_dataJenis[0] == $arr_data[2]){
                                            echo "
                                              <td>$arr_dataJenis[1]</td>
                                            ";
                                            }
                                            
                                        }
                                    }
                                    fclose($handleJenis);

                                    // Jenis ATK
                                    $fileVendor = './Data/dataVendorATK.txt';
                                    $handleVendor = fopen($fileVendor, "r") or die ("Unable to open file!");
                                    if($handleVendor) {
                                        while(($line = fgets($handleVendor)) !== false){
                                          $arr_dataVendor = explode('|', $line);
                                            if($arr_dataVendor[0] == $arr_data[3]){
                                            echo "
                                              <td>$arr_dataVendor[1]</td>
                                            ";
                                            }
                                            
                                        }
                                    }
                                    fclose($handleVendor);

                                    echo "
                                    <td>$arr_data[4]</td>
                                    <td>
                                      <button type='button' class='btn btn-success'><a class='none-decoration' href='./ATK/form_update.php?id_atk=$arr_data[0]' ><i class='bi bi-pencil-square'></i></a></button>
                                      <form method='post'>
                                          <input type='hidden' name='id_atk' value='$arr_data[0]'>
                                          <input type='hidden' name='nama_atk' value='$arr_data[1]'>
                                          <input type='hidden' name='id_jenis_atk' value='$arr_data[2]'>
                                          <input type='hidden' name='id_vendor' value='$arr_data[3]'>
                                          <input type='hidden' name='jml_stok' value='$arr_data[4]'>
                                          <button type='submit' name='delete' class='btn btn-danger' ><a class='none-decoration'><i class='bi bi-trash'></i></a></button>
                                      </form>
                                    </td>
                                </tr>
                            ";
                            $no++;
                            }
                            
                        }
                        echo "</table>";
                    }
                    fclose($handle);
                ?>
                </tbody>
            </table>
          </div>
        </div>
    </section>

    <!-- PENGHAPUSAN DATA -->
    <?php
    if (isset($_POST['delete'])) {
      // Tombol delete ditekan, lakukan tindakan penghapusan di sini
       $id_ATK = $_POST['id_atk'];
  
  
      // Tampilkan pesan alert menggunakan JavaScript
      $filename = "./Data/dataATK.txt";
      $fp = fopen($filename, "r");

      $lines = file($filename);
      $found = false;
      $new_lines = array();

      foreach ($lines as $line) {
          $arr_data = explode('|', $line);
          if ($arr_data[0] === $id_ATK) {
              // Jika email cocok, ambil data baru dari formulir
              $name = $_POST['nama_atk'];
              $jenis = $_POST['id_jenis_atk'];
              $vendor = $_POST['id_vendor'];
              $jumlah = $_POST['jml_stok'];
          
              // Update data dengan email yang cocok
              $new_line = "$id_ATK|$name|$jenis|$vendor|$jumlah|0\n";
              $new_lines[] = $new_line;
              $found = true;
          } else {
              // Tambahkan kembali data yang tidak berubah ke array baru
              $new_lines[] = $line;
          }
      }

      if ($found) {
          // Tulis ulang file dengan data yang sudah diperbarui
          file_put_contents($filename, implode($new_lines));
          echo "<script>alert('Data telah dihapus.'); window.location='./ATK.php';</script>";
      } else {
          echo "Data tidak ditemukan.";
      }
  }
    ?>


    <!-- Bootstrap js -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"
    ></script>
</body>
</html>
<?php
// Ambil email dari parameter URL
$id_vendor = $_GET['id_vendor'];


// Periksa apakah data dengan email tersebut ada dalam file hasil_input.txt
$filename = '../Data/dataVendorATK.txt';
$lines = file($filename);
$found = false;
$new_lines = array();

foreach ($lines as $line) {
    $arr_data = explode('|', $line);
    if ($arr_data[0] === $id_vendor) {
        // Jika email cocok, ambil data baru dari formulir
        $get_nama_vendor = $_POST['nama_vendor'];
        $get_alamat_vendor = $_POST['alamat_vendor'];
        $get_telp_vendor = $_POST['telp_vendor'];
        $get_email_vendor = $_POST['email_vendor'];

        // Update data dengan email yang cocok
        $new_line = "$id_vendor|$get_nama_vendor|$get_alamat_vendor|$get_telp_vendor|$get_email_vendor|1\n";
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
    echo "<script>alert('Data telah diperbarui.'); window.location='../Vendor.php';</script>";
} else {
    echo "Data tidak ditemukan.";
}

?>
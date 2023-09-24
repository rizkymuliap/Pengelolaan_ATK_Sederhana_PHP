<?php
// Ambil email dari parameter URL
$id_atk = $_GET['id_atk'];

// Periksa apakah data dengan email tersebut ada dalam file hasil_input.txt
$filename = '../Data/dataATK.txt';
$lines = file($filename);
$found = false;
$new_lines = array();

foreach ($lines as $line) {
    $arr_data = explode('|', $line);
    if ($arr_data[0] === $id_atk) {
        // Jika email cocok, ambil data baru dari formulir
        $nama_atk = $_POST['nama_atk'];
        $id_jenis_atk = $_POST['id_jenis_atk'];
        $id_vendor = $_POST['id_vendor'];
        $jml_stok = $_POST['jml_stok'];

        // Update data dengan email yang cocok
        $new_line = "$id_atk|$nama_atk|$id_jenis_atk|$id_vendor|$jml_stok|1\n";
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
    echo "<script>alert('Data telah diperbarui.'); window.location='../ATK.php';</script>";
} else {
    echo "Data tidak ditemukan.";
}

?>
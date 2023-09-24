<?php
// Ambil email dari parameter URL
$atk_id = $_GET['atk_id'];
$name = $_GET['name'];

// Periksa apakah data dengan email tersebut ada dalam file hasil_input.txt
$filename = '../Data/dataJenisATK.txt';
$lines = file($filename);
$found = false;
$new_lines = array();

foreach ($lines as $line) {
    $arr_data = explode('|', $line);
    if ($arr_data[0] === $atk_id) {
        // Jika email cocok, ambil data baru dari formulir
        $name = $_POST['name'];

        // Update data dengan email yang cocok
        $new_line = "$atk_id|$name|1\n";
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
    echo "<script>alert('Data telah diperbarui.'); window.location='../JenisATK.php';</script>";
} else {
    echo "Data tidak ditemukan.";
}

?>
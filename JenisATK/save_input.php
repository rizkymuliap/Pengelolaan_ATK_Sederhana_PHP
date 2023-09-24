<?php 

    if(isset($_POST['simpan'])){
        $get_name = $_POST['name'];

        $filename = '../Data/dataJenisATK.txt';
        $fo_read = fopen($filename, 'r');

        //Mencari tahu jumlah data yang sudah ada
        $id_jenis = 1;
        while(($line = fgets($fo_read)) !== false){
            $id_jenis++;
        }
        fclose($fo_read);

        $fp = fopen($filename, 'a');
        fwrite($fp, $id_jenis . "|" . $get_name . "|" . "1". "\n" );
        fclose($fp);
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../JenisATK.php';</script>";
    }else {
        echo "<script>alert('Maaf, tidak ada inputan!')</script>";
    }
?>
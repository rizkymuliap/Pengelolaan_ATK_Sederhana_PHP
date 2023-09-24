<?php 

    if(isset($_POST['simpan'])){
        $get_nama_atk = $_POST['nama_atk'];
        $get_id_jenis_atk = $_POST['id_jenis_atk'];
        $get_id_vendor = $_POST['id_vendor'];
        $get_jml_stok = $_POST['jml_stok'];

        $filename = '../Data/dataATK.txt';
        $fo_read = fopen($filename, 'r');

        //Mencari tahu jumlah data yang sudah ada
        $id_atk = 1;
        while(($line = fgets($fo_read)) !== false){
            $id_atk++;
        }
        fclose($fo_read);

        $fp = fopen($filename, 'a');
        fwrite($fp, $id_atk . "|" . $get_nama_atk . "|" . $get_id_jenis_atk . "|" . $get_id_vendor . "|" . $get_jml_stok . "|" . "1". "\n" );
        fclose($fp);
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../ATK.php';</script>";
    }else {
        echo "<script>alert('Maaf, tidak ada inputan!')</script>";
    }
?>
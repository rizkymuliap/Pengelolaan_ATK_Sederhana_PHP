<?php 

    if(isset($_POST['simpan'])){
        $get_name = $_POST['nama_vendor'];
        $get_alamat = $_POST['alamat_vendor'];
        $get_telepon = $_POST['telp_vendor'];
        $get_email = $_POST['email_vendor'];

        $filename = '../Data/dataVendorATK.txt';
        $fo_read = fopen($filename, 'r');

        //Mencari tahu jumlah data yang sudah ada
        $id_jenis = 1;
        while(($line = fgets($fo_read)) !== false){
            $id_jenis++;
        }
        fclose($fo_read);

        $fp = fopen($filename, 'a');
        fwrite($fp, $id_jenis . "|" . $get_name . "|" . $get_alamat . "|" . $get_telepon . "|". $get_email . "|" ."1". "\n" );
        fclose($fp);
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../Vendor.php';</script>";
    }else {
        echo "<script>alert('Maaf, tidak ada inputan!')</script>";
    }
?>
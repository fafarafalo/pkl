<!-- operasi untuk edit data form -->
<?php

require_once '../../Database/koneksi.php';

use database\koneksi;

 // Get data from form yang sudah di input
 $id = $_POST['id_vendor'];
 $Nama_Perusahaan = $_POST['Nama_Perusahaan'];
 $Alamat_Perusahaan = $_POST['Alamat_Perusahaan'];
 $NoFax = $_POST['NoFax'];
 $NoTelp = $_POST['NoTelp'];
 $Alamat_Email = $_POST['Alamat_Email'];
 $Direktur = $_POST['Direktur'];
 $NoRekening = $_POST['NoRekening'];
 $Bank = $_POST['Bank'];
 $Kantor_Bank = $_POST['Kantor_Bank'];
 $Atas_Nama = $_POST['Atas_Nama'];
 $Ket_Akta_Pendirian = $_POST['Ket_Akta_Pendirian'];
 $NoDPT = $_POST['NoDPT'];
 $NoSAPV = $_POST['NoSAPV'];

//  menggunakan Syntax UPDATE untuk mengubah data yang sudah di input
$query = "UPDATE t_vendor SET Nama_Perusahaan='$Nama_Perusahaan', Alamat_Perusahaan='$Alamat_Perusahaan', NoFax='$NoFax', NoTelp='$NoTelp', Alamat_Email='$Alamat_Email', Direktur='$Direktur', NoRekening='$NoRekening', Bank='$Bank', Kantor_Bank='$Kantor_Bank', Atas_Nama='$Atas_Nama', Ket_Akta_Pendirian='$Ket_Akta_Pendirian', NoDPT='$NoDPT', NoSAPV='$NoSAPV' WHERE id_vendor='$id'";
$koneksi = new koneksi();
$koneksi->query($query);

if ($koneksi) {
    header("location:buku.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='arsip.php';</script>";
}

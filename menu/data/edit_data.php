<?php
require_once '../../Database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One-IT</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- framework bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <script src="../../assets/js/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/locales/bootstrap-datepicker.id.min.js"></script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">One It Library</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today : <?php $d=date('d-m-Y'); echo "$d"; ?>  &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?home.php"><i class="fa fa-home fa-2x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-users fa-2x"></i> Data</a>
                    </li>

                    <li>
                        <a  href="?page=buku"><i class="fa fa-book fa-2x"></i> Data Vendor</a>
                    </li>



                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

<?php 
	$id = $_GET["id_vendor"];
	$query = "SELECT * FROM t_vendor WHERE id_vendor = '$id'";
	$result = $koneksi->query($query);
	$row = mysqli_fetch_assoc($result);
 ?>

 <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
								<form action="operasi_editvendor.php" method="POST">
                <div class="form-group">
                    <label for="id_vendor">ID</label>
                    <input type="text" class="form-control" name="id_vendor"
                        id="id_vendor" value="<?php echo $row['id_vendor']; ?>"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="Nama_Perusahaan">Nama_Perusahaan</label>
                    <input type="text" class="form-control" name="Nama_Perusahaan" id="Nama_Perusahaan"
                         value="<?php echo $row['Nama_Perusahaan']; ?>">
                </div>
                <div class="form-group">
                    <label for="Alamat_Perusahaan">Alamat_Perusahaan</label>
                    <input type="text" class="form-control" name="Alamat_Perusahaan" id="Alamat_Perusahaan"
                         value="<?php echo $row['Alamat_Perusahaan']; ?>">
                </div>
                <div class="form-group">
                    <label for="NoFax">NoFax</label>
                    <input type="text" class="form-control" name="NoFax" id="NoFax"
                         value="<?php echo $row['NoFax']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoTelp">NoTelp</label>
                    <input type="NoTelp" class="form-control" name="NoTelp" id="NoTelp"
                         value="<?php echo $row['NoTelp']; ?>">
                </div>
				<div class="form-group">
                    <label for="Alamat_Email">Alamat_Email</label>
                    <input type="text" class="form-control" name="Alamat_Email" id="Alamat_Email"
                         value="<?php echo $row['Alamat_Email']; ?>">
                </div>
				<div class="form-group">
                    <label for="Direktur">Direktur</label>
                    <input type="text" class="form-control" name="Direktur" id="Direktur"
                         value="<?php echo $row['Direktur']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoFax">NoRekening</label>
                    <input type="text" class="form-control" name="NoRekening" id="NoRekening"
                         value="<?php echo $row['NoRekening']; ?>">
                </div>
				<div class="form-group">
                    <label for="Bank">Bank</label>
                    <input type="text" class="form-control" name="Bank" id="Bank"
                         value="<?php echo $row['Bank']; ?>">
                </div>
				<div class="form-group">
                    <label for="Kantor_Bank">Kantor_Bank</label>
                    <input type="text" class="form-control" name="Kantor_Bank" id="Kantor_Bank"
                         value="<?php echo $row['Kantor_Bank']; ?>">
                </div>
				<div class="form-group">
                    <label for="Atas_Nama">Atas_Nama</label>
                    <input type="text" class="form-control" name="Atas_Nama" id="Atas_Nama"
                         value="<?php echo $row['Atas_Nama']; ?>">
                </div>
				<div class="form-group">
                    <label for="Ket_Akta_Pendirian">Ket_Akta_Pendirian</label>
                    <input type="text" class="form-control" name="Ket_Akta_Pendirian" id="Ket_Akta_Pendirian"
                         value="<?php echo $row['Ket_Akta_Pendirian']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoDPT">NoDPT</label>
                    <input type="text" class="form-control" name="NoDPT" id="NoDPT"
                         value="<?php echo $row['NoDPT']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoSAPV">NoSAPV</label>
                    <input type="text" class="form-control" name="NoSAPV" id="NoSAPV"
                         value="<?php echo $row['NoSAPV']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoNPWP">NoNPWP</label>
                    <input type="text" class="form-control" name="NoNPWP" id="NoNPWP"
                         value="<?php echo $row['NoNPWP']; ?>">
                </div>
				<button type="submit" class="btn btn-primary" name="Update"
				value="Update Data">
				Submit
				</button>
				<button type="submit" action="buku.php" class="btn btn-danger">
				Cancel
				</button>
								 </form>
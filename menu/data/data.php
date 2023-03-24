<?php
require_once '../../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One-IT</title>
    <link style=stylesheet type=text>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css">
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

  <style>
    thead input {
        width: 100%;
    }
    input[type="text"] {
  font-size: 16px; 
  padding: 10px; 
  border: 2px solid #ccc; 
  border-radius: 5px; 
}

input[type="text"]::placeholder {
  color: #999; 
  font-style: italic; 
}
.text-center.sorting {
  text-align: center;
  width: 120px; 
  
}
.text-center1 {
  text-align: center;
  width: 120px; /* atur lebar kolom sesuai kebutuhan */
}

.table-responsive {
  overflow-x: auto;
}

table {
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed;
}
table td {
  padding: 10px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f2f2f2;
}

.table-bordered,
.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}


div.dataTables_wrapper div.dataTables_length select {
  width: 50px;
  display: inline-block;
}


    </style>
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
<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- card body -->
        <div class="card-body">

        <img src="../../assets/img/datar.png" style="display: block; margin-left: auto; margin-right: auto; max-width: 100%; height: 30px;"><br><br>
                        <!-- Tombol Tambah Data -->
<div class="tambahdata">
<a href="tambah.php" class="btn btn-primary">Tambah Data</a><br><br>

<!-- buat kolom -->
<div class="table-responsive">
<table id="dataTable1" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
        <th class="text-center">No<br><br></th>
        <th class="text-center">Nama Perusahaan</th>
        <th class="text-center">Alamat Perusahaan</th>
        <th class="text-center">No Fax</th>
        <th class="text-center">No Telp</th>
        <th class="text-center">Alamat Email</th>
        <th class="text-center">Direktur</th>
        <th class="text-center">No Rekening</th>
        <th class="text-center">Bank</th>
        <th class="text-center">Kantor Bank</th>
        <th class="text-center">Atas Nama</th>
        <th class="text-center">Ket Akta Pendirian</th>
        <th class="text-center">No DPT</th>
        <th class="text-center">No SAPV</th>
        <th class="text-center">No NPWP</th>
        <th class="text-center">Action</th>
    </tr>
</thead>
<?php require 'panggil_data.php';?>
</table>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
    <script>

$(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#dataTable1 thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#dataTable1 thead');
 
    var table = $('#dataTable1').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
    </script>
</div>
</div>
</div>
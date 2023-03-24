<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
include './Database/koneksi.php';
?>

<head>
    <title> E-SPK </title>
</head>

<body class="bg-color-warning" style="background-image: url('./assets/img/bg.png'); background-repeat: no-repeat; background-position: full; background-size: cover ; width =">
    <div class="container" >

     <!-- Card Body -->
     <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="col-lg-0">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                                    </div>

                                    <!-- form login -->
                                    <form class="user" action="login.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                             <button class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php include 'footer.php';
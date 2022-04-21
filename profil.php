<?php
  include 'config.php';
  $id = $_GET['id'];

  $sql = "Select * from masjid where masjidID = '$id'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="Assets/Img/favicon.ico">
    <title>MoslemBank | Login</title>
    <link rel="stylesheet" href="Assets/costum/CSS/style.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">
    <br>
    <br>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-img">
                                <!-- <img class="bg-login-img" src="Assets/Img/masjid.jpg" alt=""> -->
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-8">PROFIL</h1>
                                        <hr>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                              <label for="">ID Masjid</label>
                                              <input type="username" class="form-control form-control-user"
                                                  id="username" aria-describedby="emailHelp" disabled="disable"
                                                  placeholder="" name="username" value="<?php echo $row[0] ?>">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                              <label for="">Nama Masjid</label>
                                              <input type="username" class="form-control form-control-user"
                                                  id="username" aria-describedby="emailHelp" disabled="disable"
                                                  placeholder="" name="username" value="<?php echo $row[1] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Alamat Masjid</label>
                                          <input
                                            type="text"
                                            class="form-control form-control-user"
                                            name="MasjidAddress"
                                            placeholder="Masjid Address"
                                            disabled = "disable"
                                            value="<?php echo $row[2] ?>"
                                          />
                                        </div>
                                            <a class="btn btn-success btn-block btn-user" href="main.php?page=dashboard">Back</a> 
                                        <hr>
                                    </form>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
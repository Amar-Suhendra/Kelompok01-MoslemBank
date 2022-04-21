<?php
session_start();
if (isset($_POST['login'])) {
    include 'config.php';
    $USERNAME = $_POST['username'];
    $PASSWORD = $_POST['password'];

    $result = mysqli_query(
        $db,
        "SELECT * FROM masjid WHERE MasjidName = '$USERNAME' AND MasjidPassword = '$PASSWORD'"
    );

    //check username
    if (mysqli_num_rows($result) == 1) {
        // set session
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['login'] = true;
            $_SESSION['MasjidID'] = $row['MasjidID'];
            $_SESSION['MasjidName'] = $row['MasjidName'];
            $_SESSION['MasjidAddress'] = $row['MasjidAddress'];
            $_SESSION['MasjidPassword'] = $row['MasjidPassword'];
            header("location: main.php?page=dashboard");
            exit();
        }
    } else {
        echo '<script>
        alert("Username or Password is incorrect")
        </script>';
        
    }
}
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
                                        <h1 class="h4 text-gray-900 mb-8">Welcome Back!</h1>
                                        <hr>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="Enter Username..." name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block" name="login">
                                            Login
                                        </button> 
                                        <hr>
                                    </form>
                                    <br>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
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
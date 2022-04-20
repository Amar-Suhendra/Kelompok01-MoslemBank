<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MoslemBank | Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<?php
    // Contoh cuma
    $donation = array(100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000);
    $expenses = array(10000, 20000, 30000, 40000, 50000, 60000, 70000, 80000, 90000, 100000);

    $dates  = array('2020-01-01', '2020-01-02', '2020-01-03', '2020-01-04', '2020-01-05', '2020-01-06', '2020-01-07', '2020-01-08', '2020-01-09', '2020-01-10');
    $masjid = array('MAS001', 'MAS002', 'MAS003', 'MAS004', 'MAS005', 'MAS006', 'MAS007', 'MAS008', 'MAS009', 'MAS010');

    $total_donation = array_sum($donation);
    $total_expenses = array_sum($expenses);

    $total = $total_donation - $total_expenses;
    $kas   = $total_donation - $total_expenses;
?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-mosque"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MoslemBank</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Pages</div>

            <!-- Nav Item - Pages -->
            <li class="nav-item">
                <a class="nav-link" href="#" aria-expanded="true">
                    <i class="fas fa-fw fa-hand-holding"></i>
                    <span>Sedekah</span>
                </a>
            </li>
            <!-- Nav Item - Pages -->
            <li class="nav-item">
                <a class="nav-link" href="#" aria-expanded="true">
                    <i class="fas fa-fw fa-wallet"></i>
                    <span>Pengeluaran</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">USERNAME</span>
                                <img class="img-profile rounded-circle" src="Assets/Img/user.png" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="col">
                        <h3>Quick Overview</h3>
                        <hr>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="#" class="stretched-link"></a>
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sedekah</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 
                                                    <?php
                                                        echo number_format($total_donation, 0, ',', '.');
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-hand-holding fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="#" class="stretched-link"></a>
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengeluaran</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 
                                                    <?php
                                                        echo number_format($total_expenses, 0, ',', '.');
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-wallet fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp. 
                                                            <?php
                                                                echo number_format($total, 0, ',', '.');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 
                                                    <?php
                                                        echo number_format($kas, 0, ',', '.');
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <h3>Sedekah Minggu ini</h3>
                                <hr>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="width: 20%">Tanggal</th>
                                            <th scope="col" style="width: 40%">Jumlah</th>
                                            <th scope="col" style="width: 40%">Masjid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        for ($i=0; $i < sizeof($donation); $i++) { 
                                            echo '<tr>';
                                            echo '<td>'.$dates[$i].'</td>';
                                            echo '<td>Rp. '.number_format($donation[$i], 0, ',', '.').'</td>';
                                            echo '<td>'.$masjid[$i].'</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <h3>Pengeluaran Minggu ini</h3>
                                <hr>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="width: 20%">Tanggal</th>
                                            <th scope="col" style="width: 40%">Jumlah</th>
                                            <th scope="col" style="width: 40%">Masjid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        for ($i=0; $i < sizeof($expenses); $i++) { 
                                            echo '<tr>';
                                            echo '<td>'.$dates[$i].'</td>';
                                            echo '<td>Rp. '.number_format($expenses[$i], 0, ',', '.').'</td>';
                                            echo '<td>'.$masjid[$i].'</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MoslemBank 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-primary" href="#">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
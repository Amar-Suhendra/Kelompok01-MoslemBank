<?php
    include '../../config.php';
    $id = $_GET['id'];

    $sql = "delete from expenses where expenseID = '$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        echo "<script>alert('Delete Success');</script>";
        echo "<script>location='?page=pengeluaran';</script>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
    }
?>
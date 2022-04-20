<?php
    include '../../config.php';
    $id = $_GET['id'];

    $sql = "delete from donation where DonationID = '$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        echo "<script>alert('Delete Success');</script>";
        echo "<script>location='?page=sedekah';</script>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
    }
?>
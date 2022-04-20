<?php
if (isset($_POST['regis'])) {
    include 'config.php';
    $MasjidName = $_POST['MasjidName'];
    $MasjidAddress = $_POST['MasjidAddress'];
    $MasjidPassword = $_POST['MasjidPassword'];
    $MasjidRepeatPassword = $_POST['MasjidRepeatPassword'];

    $result = mysqli_query($db, 'select count(*) from masjid;');
    $row = mysqli_fetch_array($result);

    $jumlahdigit = strlen($row[0]);

    if ($jumlahdigit == 1) {
        $masjidID = 'MAS00' . $row[0] + 1;
    } elseif ($jumlahdigit == 2) {
        $masjidID = 'MAS0' . $row[0] + 1;
    } elseif ($jumlahdigit == 3) {
        $masjidID = 'MAS' . $row[0] + 1;
    }

    if ($MasjidPassword == $MasjidRepeatPassword) {
        $sql = "INSERT INTO masjid (masjidID, masjidName, masjidAddress, masjidPassword) VALUES ('$masjidID', '$MasjidName', '$MasjidAddress', '$MasjidPassword')";
        if (mysqli_query($db, $sql)) {
            echo "<script>alert('Register Success');</script>";
            echo "<script>location='login.php';</script>";
        } else {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
        }
    }
}
?>

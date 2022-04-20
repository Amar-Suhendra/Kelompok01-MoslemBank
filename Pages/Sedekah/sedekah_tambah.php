<?php
if (isset($_POST['submit'])) {
    include '../../config.php';
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $masjidID = $_SESSION['MasjidID'];
    $result = mysqli_query($db, 'select count(*) from donation;');
    $row = mysqli_fetch_array($result);

    $jumlahdigit = strlen($row[0]);

    if ($jumlahdigit == 1) {
        $donationID = 'DON00' . $row[0] + 1;
    } elseif ($jumlahdigit == 2) {
        $donationID = 'DON0' . $row[0] + 1;
    } elseif ($jumlahdigit == 3) {
        $donationID = 'DON' . $row[0] + 1;
    } else {
        $donationID = '' . $row[0] + 1;
    }

    $sql = "INSERT INTO donation (donationID, amount, date, MasjidID) VALUES ('$donationID', '$amount', '$date', '$masjidID')";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Submit Success');</script>";
        echo "<script>location='?page=sedekah';</script>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
    }
}
?>

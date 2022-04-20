<?php
if (isset($_POST['submit'])) {
    include '../../config.php';
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $masjidID = $_SESSION['MasjidID'];
    $result = mysqli_query($db, 'select DonationID from donation order by DonationID desc limit 1;');
    $row = mysqli_fetch_array($result);

    $lastdigit = str_split($row[0],3);
    $lastdigit = $lastdigit[1] + 1;

    $jumlahdigit = strlen($lastdigit);

    if ($jumlahdigit == 1) {
        $donationID = 'DON00' . $lastdigit;
    } elseif ($jumlahdigit == 2) {
        $donationID = 'DON0' . $lastdigit;
    } elseif ($jumlahdigit >= 3) {
        $donationID = 'DON' . $lastdigit;
    }

    if ($date == null) {
        $date = date("Y/m/d");
    }

    $sql = "INSERT INTO donation (donationID, amount, date, MasjidID) VALUES ('$donationID', '$amount', '$date', '$masjidID')";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Submit Success');</script>";
        echo "<script>location='?page=sedekah';</script>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
    }
    $data = "";
}
?>

<?php
if (isset($_POST['submit'])) {
    include '../../config.php';
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $masjidID = $_SESSION['MasjidID'];
    $result = mysqli_query($db, 'select count(*) from expenses;');
    $row = mysqli_fetch_array($result);

    $jumlahdigit = strlen($row[0]);

    if ($jumlahdigit == 1) {
        $expenseID = 'EXP00' . $row[0] + 1;
    } elseif ($jumlahdigit == 2) {
        $expenseID = 'EXP0' . $row[0] + 1;
    } elseif ($jumlahdigit == 3) {
        $expenseID = 'EXP' . $row[0] + 1;
    } else {
        $expenseID = 'EXP' . $row[0] + 1;
    }

    $sql = "INSERT INTO expenses (expenseID, amount, date, MasjidID) VALUES ('$expenseID', '$amount', '$date', '$masjidID')";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Submit Success');</script>";
        echo "<script>location='?page=pengeluaran';</script>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
    }
}
?>

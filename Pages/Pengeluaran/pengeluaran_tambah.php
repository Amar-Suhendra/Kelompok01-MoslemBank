<?php
if (isset($_POST['submit'])) {
    include '../../config.php';
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $masjidID = $_SESSION['MasjidID'];
    $result = mysqli_query($db, 'select ExpenseID from expenses order by ExpenseID desc limit 1;');
    $row = mysqli_fetch_array($result);

    $lastdigit = str_split($row[0],3);
    $lastdigit = $lastdigit[1] + 1;

    $jumlahdigit = strlen($lastdigit);

    if ($jumlahdigit == 1) {
        $expensesID = 'EXP00' . $lastdigit;
    } elseif ($jumlahdigit == 2) {
        $expensesID = 'EXP0' . $lastdigit;
    } elseif ($jumlahdigit >= 3) {
        $expensesID = 'EXP' . $lastdigit;
    }

    if ($date == null) {
        $date = date("Y/m/d");
    }

    $sql = "INSERT INTO expenses (expenseID, amount, date, MasjidID) VALUES ('$expensesID', '$amount', '$date', '$masjidID')";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Submit Success');</script>";
        echo "<script>location='?page=pengeluaran';</script>";
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($db);
    }
    $data = "";
}
?>
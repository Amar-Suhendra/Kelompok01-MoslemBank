<?php
  include '../../config.php';
  $id = $_GET['id'];

  $sql = "Select * from donation where DonationID = '$id'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
?>
<div class="col-lg-4">
  <div class="card shadow mb-4">
    <div class="card-header">Tambah</div>
    <div class="card-body">
      <form action="" method="post">
        <table>
          <thead>
            <th>Amount</th>
            <th>Date</th>
          </thead>
          <tbody>
            <tr>
              <td>
                <input
                  type="number"
                  name="amount"
                  placeholder="Rp..."
                  class="form-control"
                  value="<?php echo $row[1] ?>"
                />
              </td>
              <td>
                <input 
                  type="date" 
                  name="date" 
                  class="form-control"
                  value="<?php echo $row[2] ?>" 
                />
              </td>
              <td>
                <input
                  type="submit"
                  name="submit"
                  value="Submit"
                  class="btn btn-primary"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>

<?php 
  if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $sql = "UPDATE donation SET amount = '$amount', date = '$date' WHERE DonationID = '$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
      echo "<script>alert('Data berhasil diubah');</script>";
      echo "<script>location='?page=sedekah';</script>";
    } else {
      echo "<script>alert('Data gagal diubah');</script>";
      echo "<script>location='?page=sedekah';</script>";
    }
  }
?>
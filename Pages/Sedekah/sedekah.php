<div class="content">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Sedekah</h1>
  <p class="mb-4"></p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-black-50">Riwayat Sedekah</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered"
          id="dataTable"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th>No</th>
              <th>Donation ID</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Donation ID</th>
              <th>Amount</th>
              <th>Date</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $no = 1;
            $id = $_SESSION['MasjidID'];
            $sql = $db->query("select * from donation where MasjidID = '$id';");

            while ($data = $sql->fetch_assoc()) {
            ?>
            <tr>
              <th><?php echo $no++ ?></th>
              <th><?php echo $data['DonationID'] ?></th>
              <th><?php echo "Rp.".$data['Amount'] ?></th>
              <th><?php echo $data['Date'] ?></th>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

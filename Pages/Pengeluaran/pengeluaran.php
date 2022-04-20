<div class="content">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Pengeluaran</h1>
  <p class="mb-4"></p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col">
          <h6 class="m-0 font-weight-bold text-black-50">Riwayat Pengeluaran</h6>
        </div>
        <div class="col text-right">
          <button type="button" class="btn btn-success">
            <a style="text-decoration: none; color:white" href="?page=pengeluaran&aksi=tambah">Tambah Pengeluaran</a>
          </button>
        </div>
      </div>
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
              <th>Expense ID</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Aksi</th>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Expense ID</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
          <?php
          $no = 1;
          $id = $_SESSION['MasjidID'];
          $sql = $db->query("select * from expenses where MasjidID = '$id';");

          while ($data = $sql->fetch_assoc()) { ?>
            <tr>
              <th><?php echo $no++; ?></th>
              <th><?php echo $data['ExpenseID']; ?></th>
              <th><?php echo 'Rp.' . $data['Amount']; ?></th>
              <th><?php echo $data['Date']; ?></th>
              <th class="col-2">
              <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:white" href="#">Edit</a></button>
              <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:white" href="#">Hapus</a></button>
              </th>
            </tr>
            <?php }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="row">
    <div class="col">
      <h1 class="mb-2 text-dark">Pengeluaran</h1>
    </div>
    <!-- Page Heading -->
    <div class="col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header">Tambah</div>
        <div class="card-body">
          <form action="?page=pengeluaran&aksi=tambah" method="post">
            <table>
              <thead>
                <th>Amount</th>
                <th>Date</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input type="number" name="amount" placeholder="Rp..." class="form-control" />
                  </td>
                  <td>
                    <input type="date" name="date" class="form-control" />
                  </td>
                  <td>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col">
          <h6 class="m-0 font-weight-bold text-dark">Riwayat Pengeluaran</h6>
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
            </tr>
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
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['ExpenseID']; ?></td>
              <td><?php echo 'Rp.' .
                  number_format($data['Amount'], 0, ',', '.'); ?></td>
              <td><?php echo $data['Date']; ?></td>
              <td class="col-2">
                <button type="button" class="btn btn-primary">
                  <a style="text-decoration: none; color: white" name="edit" href="?page=pengeluaran&aksi=edit&id=<?php echo $data['ExpenseID']; ?>">Edit</a>
                </button>
                <button type="button" class="btn btn-danger">
                  <a style="text-decoration: none; color: white" href="?page=pengeluaran&aksi=hapus&id=<?php echo $data['ExpenseID']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </button>
              </td>
            </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

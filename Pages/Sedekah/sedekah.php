<div class="content">
  <div class="row">
    <div class="col">
      <h1 class="mb-2 text-dark ">Sedekah</h1>
    </div>
    <!-- Page Heading -->
    <div class="col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header">Tambah</div>
        <div class="card-body">
          <form action="?page=sedekah&aksi=tambah" method="post">
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
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Donation ID</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $no = 1;
            $id = $_SESSION['MasjidID'];
            $sql = $db->query("select * from donation where MasjidID = '$id';");

            while ($data = $sql->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['DonationID']; ?></td>
              <td><?php echo 'Rp.' .
                  number_format($data['Amount'], 0, ',', '.'); ?></td>
              <td><?php echo $data['Date']; ?></td>
              <td class="col-2">
                <button type="button" class="btn btn-primary">
                  <a style="text-decoration: none; color: white" name="edit" href="?page=sedekah&aksi=edit&id=<?php echo $data[
                      'DonationID'
                  ]; ?>">Edit</a>
                </button>
                <button type="button" class="btn btn-danger">
                  <a style="text-decoration: none; color: white" href="?page=sedekah&aksi=hapus&id=<?php echo $data[
                      'DonationID'
                  ]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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

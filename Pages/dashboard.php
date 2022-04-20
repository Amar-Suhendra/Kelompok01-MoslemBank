<?php
$id = $_SESSION['MasjidID'];

$total_donation = mysqli_fetch_array(
    mysqli_query(
        $db,
        "select sum(amount) from donation where MasjidID = '$id';"
    )
)['sum(amount)'];
$total_expenses = mysqli_fetch_array(
    mysqli_query(
        $db,
        "select sum(amount) from expenses where MasjidID = '$id';"
    )
)['sum(amount)'];
$total_donation_this_month = mysqli_fetch_array(
    mysqli_query(
        $db,
        "select sum(amount) from donation where MasjidID = '$id' and date > now() - INTERVAL 1 month;"
    )
)['sum(amount)'];
$total_expenses_this_month = mysqli_fetch_array(
    mysqli_query(
        $db,
        "select sum(amount) from expenses where MasjidID = '$id' and date > now() - INTERVAL 1 month;"
    )
)['sum(amount)'];

$total = $total_donation - $total_expenses;
$total_this_month = $total_donation_this_month - $total_expenses_this_month;
?>

<div class="container-fluid">
    <h3>Quick Overview</h3>
    <hr>
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="#" class="stretched-link"></a>
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sedekah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                  <?php echo number_format($total_donation, 0, ',', '.'); ?>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-hand-holding fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="#" class="stretched-link"></a>
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengeluaran</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                  <?php echo number_format($total_expenses, 0, ',', '.'); ?>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-wallet fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp.
                      <?php echo number_format($total, 0, ',', '.'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Bulan Ini</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                  <?php echo number_format($total_this_month, 0, ',', '.'); ?>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <div class="card shadow">
          <div class="card-header">
            <h3>Sedekah Bulan ini</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Donation ID</th>
                  <th>Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $id = $_SESSION['MasjidID'];
                $sql = $db->query(
                    "select * from donation where MasjidID = '$id' and date > now() - INTERVAL 1 month;"
                );

                while ($data = $sql->fetch_assoc()) { ?>
                  <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $data['DonationID']; ?></th>
                    <th><?php echo $data['Date']; ?></th>
                    <th><?php echo 'Rp.' .
                        number_format($data['Amount'], 0, ',', '.'); ?></th>
                  </tr>
                <?php }
                ?>
                <tr>
                  <th colspan="3">Total</th>
                  <th><?php echo 'Rp.' .
                      number_format(
                          $total_donation_this_month,
                          0,
                          ',',
                          '.'
                      ); ?></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="card shadow">
          <div class="card-header">
            <h3>Pengeluaran Bulan ini</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Expense ID</th>
                  <th>Date</th>
                  <th>Amount</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $id = $_SESSION['MasjidID'];
                $sql = $db->query(
                    "select * from expenses where MasjidID = '$id' and date > now() - INTERVAL 1 month;"
                );

                while ($data = $sql->fetch_assoc()) { ?>
                  <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $data['ExpenseID']; ?></th>
                    <th><?php echo $data['Date']; ?></th>
                    <th><?php echo 'Rp.' .
                        number_format($data['Amount'], 0, ',', '.'); ?></th>
                  </tr>
                <?php }
                ?>
                <tr>
                  <th colspan="3">Total</th>
                  <th><?php echo 'Rp.' .
                      number_format(
                          $total_expenses_this_month,
                          0,
                          ',',
                          '.'
                      ); ?></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
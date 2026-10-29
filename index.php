<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>

<div class="col p-4">
  <div class="card shadow-sm">
    <div class="card-body p-4">
      <h2 class="text-primary fw-bold text-center">Flora Paper Hub</h2>
      <p class="text-muted text-center">Sistem Pengurusan Inventori dan Pesanan Kraf Kertas</p>
      <hr>

      <div class="alert alert-primary text-center">
        Selamat datang ke sistem pengurusan Flora Paper Hub. Sistem ini digunakan untuk mengurus rekod produk, data pelanggan, maklumat staf, dan transaksi pesanan.
      </div>

      <div class="card bg-light border-0 my-4">
        <div class="card-body text-center">
          <h5 class="fw-bold mb-3">Maklumat Pelajar</h5>
          <p class="mb-1"><strong>Nama:</strong> Abdul Safar Bin Mansor</p>
          <p class="mb-1"><strong>No. Matrik:</strong> A220329</p>
          <p class="mb-0"><strong>Kursus:</strong> TTTM2113 Web Development(PT1)</p>
        </div>
      </div>

      <div class="d-flex justify-content-center gap-2">
        <a href="products.php" class="btn btn-primary">Products</a>
        <a href="customers.php" class="btn btn-outline-secondary">Customers</a>
        <a href="staffs.php" class="btn btn-outline-secondary">Staffs</a>
        <a href="orders.php" class="btn btn-outline-secondary">Orders</a>
      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
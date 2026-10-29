<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>

<div class="col p-4">
  <div class="card shadow-sm">
    <div class="card-body p-4">
      <h2 class="text-primary fw-bold">Flora Paper Hub</h2>
      <p class="text-muted">Sistem Pengurusan Inventori dan Pesanan Kraf Kertas</p>
      <hr>

      <div class="alert alert-primary">
        Selamat datang ke sistem pengurusan Flora Paper Hub. Sistem ini digunakan untuk mengurus rekod produk, data pelanggan, maklumat staf, dan transaksi pesanan.
      </div>

      <div class="card bg-light border-0 my-4">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Maklumat Pelajar</h5>
          <p class="mb-1"><strong>Nama:</strong> Abdul Safar Bin Mansor</p>
          <p class="mb-1"><strong>No. Matrik:</strong> A220329</p>
          <p class="mb-0"><strong>Kursus:</strong> TTTM2113 Pembangunan Aplikasi Web (PT1)</p>
        </div>
      </div>

      <div class="d-flex gap-2">
        <a href="products.php" class="btn btn-primary">Urus Produk</a>
        <a href="customers.php" class="btn btn-outline-secondary">Urus Pelanggan</a>
        <a href="staffs.php" class="btn btn-outline-secondary">Urus Staf</a>
        <a href="orders.php" class="btn btn-outline-secondary">Urus Pesanan</a>
      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>

<div class="col p-4">
  <div class="border-start border-4 border-primary ps-3 mb-4">
    <h2 class="fw-bold text-dark mb-1">Flora Paper Hub</h2>
    <p class="text-muted mb-0">Watercolor Paper Pads & Art Supply Management System</p>
  </div>

  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4 text-center">
      <h3 class="text-primary fw-bold mb-2">Flora Paper Hub</h3>
      <p class="text-muted">Specialist in Premium Watercolor Paper Pads, Cold-Pressed Sheets & Art Supplies</p>
      <hr>

      <div class="alert alert-primary text-center my-3" role="alert">
        Welcome to the Flora Paper Hub back-office management system. This application allows staff to manage inventory items, customer directories, staff records, and order transactions.
      </div>

      <div class="card bg-light border-0 my-4 text-start">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Student Information</h5>
          <p class="mb-1"><strong>Name:</strong> Abdul Safar Bin Mansor</p>
          <p class="mb-1"><strong>Matric No:</strong> A220329</p>
          <p class="mb-0"><strong>Course:</strong> TTTM2113 Web Development (PT1)</p>
        </div>
      </div>

      <div class="d-flex justify-content-center gap-2 flex-wrap">
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
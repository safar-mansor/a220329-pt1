<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>

<style>
  @media print {
    #mySidebar, .navbar, .btn {
      display: none !important;
    }
    .card {
      border: none !important;
      box-shadow: none !important;
    }
    body {
      background-color: #ffffff !important;
    }
  }
</style>

<div class="col p-4">
  <div class="card shadow-sm border-0 border-start border-4 border-primary mb-4">
    <div class="card-body d-flex justify-content-between align-items-center p-3">
      <div>
        <h3 class="fw-bold mb-0">Invoice</h3>
        <small class="text-muted">Order #O001</small>
      </div>
      <button onclick="window.print()" class="btn btn-primary">
        <i class="bi bi-printer me-1"></i> Print
      </button>
    </div>
  </div>

  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
          <h4 class="fw-bold mb-1">Flora Paper Hub</h4>
          <p class="text-muted mb-0">Sales Invoice</p>
        </div>
        <div class="text-end">
          <p class="mb-0"><strong>Invoice No.:</strong> O001</p>
          <p class="text-muted mb-0"><strong>Date:</strong> 2026-10-31</p>
        </div>
      </div>

      <hr>

      <div class="d-flex justify-content-between mb-4">
        <div>
          <h6 class="fw-bold mb-1">Customer</h6>
          <p class="mb-0">Alice Johnson</p>
          <p class="text-muted mb-0">012-3456789</p>
        </div>
        <div class="text-end">
          <h6 class="fw-bold mb-1">Staff</h6>
          <p class="mb-0">Abdul Safar</p>
          <p class="text-muted mb-0">a220329@siswa.ukm.edu.my</p>
        </div>
      </div>

      <div class="table-responsive mb-3">
        <table class="table table-bordered align-middle">
          <thead class="table-dark">
            <tr>
              <th style="width: 50px;">#</th>
              <th>Product</th>
              <th class="text-center" style="width: 160px;">Unit Price</th>
              <th class="text-center" style="width: 120px;">Quantity</th>
              <th class="text-end" style="width: 160px;">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Arches Aquarelle Pad 300gsm (Cold Pressed)</td>
              <td class="text-center">$85.00</td>
              <td class="text-center">1</td>
              <td class="text-end">$85.00</td>
            </tr>
            <tr>
              <td colspan="4" class="text-end fw-bold">Grand Total</td>
              <td class="text-end fw-bold">$85.00</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div>
        <a href="orderdetails.php" class="btn btn-secondary">
          <i class="bi bi-arrow-left"></i> Back to Details
        </a>
      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
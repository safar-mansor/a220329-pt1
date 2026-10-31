<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>

<div class="col p-4">
  <div class="border-start border-4 border-primary ps-3 mb-4 d-print-none">
    <h2 class="fw-bold text-dark mb-1">Invoice</h2>
    <p class="text-muted mb-0">Official sales transaction receipt</p>
  </div>

  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h3 class="fw-bold text-primary mb-1">Flora Paper Hub</h3>
          <p class="text-muted mb-0 small">Watercolor Paper Pads & Art Supply Specialist</p>
        </div>
        <div class="text-end">
          <h5 class="fw-bold mb-0">INVOICE</h5>
          <small class="text-muted">#INV-2026-001</small>
        </div>
      </div>

      <hr>

      <div class="row mb-4">
        <div class="col-sm-6">
          <h6 class="fw-bold">Billed To:</h6>
          <p class="text-muted mb-0">Nurul Ain</p>
          <p class="text-muted mb-0">No. 12, Jalan Universiti, 43600 Bangi</p>
          <p class="text-muted mb-0">012-3456789</p>
        </div>
        <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
          <h6 class="fw-bold">Invoice Details:</h6>
          <p class="text-muted mb-0"><strong>Date:</strong> 31 October 2026</p>
          <p class="text-muted mb-0"><strong>Cashier:</strong> Abdul Safar</p>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="table-dark">
            <tr>
              <th>Item Description</th>
              <th class="text-center">Quantity</th>
              <th class="text-end">Unit Price</th>
              <th class="text-end">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Arches Aquarelle Pad 300gsm (Cold Pressed)</td>
              <td class="text-center">2</td>
              <td class="text-end">$85.00</td>
              <td class="text-end">$170.00</td>
            </tr>
            <tr>
              <th colspan="3" class="text-end">Grand Total:</th>
              <th class="text-end text-primary">$170.00</th>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-between mt-4 d-print-none">
        <a href="orders.php" class="btn btn-outline-secondary">Back to Orders</a>
        <button onclick="window.print()" class="btn btn-primary"><i class="bi bi-printer me-1"></i> Print Invoice</button>
      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
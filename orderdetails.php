<?php
  include_once 'header.php';
  include_once 'sidebar.php';
?>

<div class="col p-4">
  <div class="border-start border-4 border-primary ps-3 mb-4">
    <h2 class="fw-bold text-dark mb-1">Order Details</h2>
    <p class="text-muted mb-0">View items included in this order</p>
  </div>

  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">
      <h5 class="fw-bold mb-3">Order Information</h5>
      <p class="mb-1"><strong>Order ID:</strong> ORD-2026-001</p>
      <p class="mb-1"><strong>Customer:</strong> Nurul Ain</p>
      <p class="mb-3"><strong>Staff In-Charge:</strong> Abdul Safar</p>

      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Product Name</th>
              <th>Texture</th>
              <th>Weight (GSM)</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Arches Aquarelle Pad 300gsm</td>
              <td>Cold Pressed</td>
              <td>300</td>
              <td>$85.00</td>
              <td>2</td>
              <td>$170.00</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mt-3">
        <a href="orders.php" class="btn btn-secondary">Back to Orders</a>
        <a href="invoice.php" class="btn btn-primary">Generate Invoice</a>
      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
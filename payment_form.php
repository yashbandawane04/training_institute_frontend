<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="mb-4 text-center">Payment Form</h3>
      <form action="/Project/payments_insert.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Student ID</label>
          <input type="number" name="student_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Amount</label>
          <input type="number" name="amount" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Amount Paid</label>
          <input type="number" name="amount_paid" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Total Fees</label>
          <input type="number" name="total_fees" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Due Amount</label>
          <input type="number" name="due_amount" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Payment Method</label>
          <input type="text" name="payment_method" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Transaction ID</label>
          <input type="text" name="transaction_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Payment Date</label>
          <input type="date" name="payment_date" class="form-control" required>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

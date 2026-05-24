<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Batches Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="mb-4 text-center">Batches Form</h3>
      <form action="batches_insert.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Course ID</label>
          <input type="number" name="course_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Trainer ID</label>
          <input type="number" name="trainer_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Batch Code</label>
          <input type="text" name="batch_code" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Batch Name</label>
          <input type="text" name="batch_name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Start Date</label>
          <input type="date" name="start_date" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">End Date</label>
          <input type="date" name="end_date" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Days</label>
          <input type="text" name="days" class="form-control" placeholder="e.g. Mon, Wed, Fri" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Time Slot</label>
          <input type="text" name="time_slot" class="form-control" placeholder="e.g. 10:00 AM - 12:00 PM" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Mode</label>
          <select name="mode" class="form-select" required>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
            <option value="Hybrid">Hybrid</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-select" required>
            <option value="Active">Active</option>
            <option value="Completed">Completed</option>
            <option value="Upcoming">Upcoming</option>
          </select>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

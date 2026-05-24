<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Enrollment Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="mb-4 text-center">Enrollment Form</h3>
      <form action="/Project/enrollment_insert.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Student ID</label>
          <input type="number" name="student_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Course ID</label>
          <input type="number" name="course_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Batch ID</label>
          <input type="number" name="batch_id" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Enrollment Date</label>
          <input type="date" name="enrollment_date" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-select" required>
            <option value="Active">Active</option>
            <option value="Cancelled">Cancelled</option>
            <option value="Completed">Completed</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Remarks</label>
          <textarea name="remarks" class="form-control" rows="2" placeholder="Optional..."></textarea>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

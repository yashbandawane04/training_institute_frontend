<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Courses Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="mb-4 text-center">Courses Form</h3>
      <form action="courses_insert.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Course Name</label>
          <input type="text" name="course_name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Duration (Weeks)</label>
          <input type="number" name="duration_weeks" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Total Hours</label>
          <input type="number" name="total_hours" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Fees</label>
          <input type="number" name="fees" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Syllabus Link</label>
          <input type="url" name="syllabus_link" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Created At</label>
          <input type="date" name="created_at" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Course Code</label>
          <input type="text" name="course_code" class="form-control" required>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="mb-4 text-center">Student Registration</h3>
      <form action="student_insert.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" name="full_name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Date of Birth</label>
          <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select name="gender" class="form-select" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Alternate Phone</label>
          <input type="text" name="alternate_phone" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <textarea name="address" class="form-control" rows="2" required></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">City</label>
          <input type="text" name="city" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">State</label>
          <input type="text" name="state" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Pincode</label>
          <input type="text" name="pincode" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Education Qualification</label>
          <input type="text" name="education_qualification" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Occupation</label>
          <input type="text" name="occupation" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Registration Date</label>
          <input type="date" name="registration_date" class="form-control" required>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

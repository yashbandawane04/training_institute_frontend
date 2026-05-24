\<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e0f7fa, #fce4ec);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      text-align: center;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(0,0,0,0.1);
      background: white;
      animation: pop 0.4s ease-out;
    }
    .icon {
      font-size: 80px;
      color: #ffc107;
    }
    @keyframes pop {
      from { transform: scale(0.8); opacity: 0; }
      to   { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="icon mb-4">
      <i class="bi bi-trophy-fill"></i>
    </div>
    <h2 class="mb-3 text-success">Successfully Registered!</h2>
    <p class="text-muted">Your form has been submitted and payment is confirmed.</p>
  </div>
</body>
</html>

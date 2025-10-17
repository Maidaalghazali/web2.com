<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Web2</title>
  <style>
    body {
      margin: 0;
      font-family: 'Quicksand', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #ff9966, #ff5e62);
      color: #fff;
      overflow: hidden;
    }
    .card {
      background: rgba(255,255,255,0.1);
      border-radius: 20px;
      padding: 40px 60px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      backdrop-filter: blur(8px);
      text-align: center;
      animation: fadeSlide 1.2s ease;
    }
    h1 {
      font-size: 2.8rem;
      margin-bottom: 10px;
    }
    p {
      font-size: 1.1rem;
      opacity: 0.9;
    }
    @keyframes fadeSlide {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Welcome to Web2</h1>
    <p>Deployed with GitHub Actions CI/CD 💫</p>
  </div>
</body>
</html>

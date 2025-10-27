<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You - Yatharth Rahangdale</title>
  <link rel="stylesheet" href="Style.css"> <!-- Optional: link your main CSS -->
  <style>
    /* Background gradient */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1a73e8, #00c6ff);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      text-align: center;
      flex-direction: column;
    }

    .thankyou-container {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 40px 60px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(10px);
      animation: fadeIn 1.2s ease-in-out;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .home-btn {
      text-decoration: none;
      background: white;
      color: #1a73e8;
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .home-btn:hover {
      background: #1a73e8;
      color: white;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.4);
      transform: scale(1.05);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="thankyou-container">
    <h1>🎉 Thank You!</h1>
    <p>Your message has been successfully submitted.<br>
       I’ll get back to you ASAP.</p>
    <a href="index.html" class="home-btn">Go Back to Home</a>
  </div>
</body>
</html>

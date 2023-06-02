<!DOCTYPE html>
<html>
<head>
  <title>Fitness Tracker - Menu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://images.pexels.com/photos/878151/pexels-photo-878151.jpeg');
      background-size: cover;
      background-position: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      color: rgb(59, 220, 35);
      font-weight: bold;
      text-decoration: none;
      z-index: 1;
      display: flex;
      align-items: center;
    }

    .logo img {
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }

    h1 {
      text-align: center;
      color: rgb(87, 74, 239);
      margin-bottom: 30px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    li {
      margin: 0 10px;
    }

    a {
      display: block;
      padding: 10px;
      color: rgb(179, 227, 19);
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .footer {
      background-color: rgba(0, 0, 0, 0.8);
      color: rgb(105, 212, 11);
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }

    .wordings {
      text-align: center;
      margin-top: 50px;
      margin-bottom: 30px;
    }

    .wordings h2 {
      font-size: 32px;
      color: rgb(31, 109, 161);
      margin-bottom: 10px;
    }

    .wordings p {
      font-size: 20px;
      color: rgb(24, 152, 237);
      margin-bottom: 0;
    }

    .connect-link {
      text-align: center;
      margin-top: 20px;
    }

    .connect-link a {
      color: rgb(148, 234, 10);
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="wordings">
      <h2>Welcome to Fitness Tracker</h2>
      <p>Your ultimate companion on your fitness journey</p>
    </div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="my-plan.php">My Plan</a></li>
      <li><a href="workouts.php">Workouts</a></li>
      <li><a href="stats.html">Stats</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="nutrition.php">Nutrition</a></li>
    </ul>
    <div class="connect-link">
      <a href="connect.php">Connect with us</a>
    </div>
  </div>
  <a href="#" class="logo">
    <img src="logo.png" alt="Fitness Tracker Logo">
    Fitness Tracker
  </a>
  <div class="footer">
    &copy; 2023 Fitness Tracker. All rights reserved.
  </div>
</body>
</html>

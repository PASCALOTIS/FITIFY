<!DOCTYPE html>
<html>
<head>
  <title>Fitness Tracker - Menu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://images.pexels.com/photos/4526478/pexels-photo-4526478.jpeg');
      background-size: cover;
      background-position: center;
      background-color: rgb(28, 157, 222);
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
      color: rgb(222, 72, 35);
      font-weight: bold;
      text-decoration: none;
      margin-bottom: 50px;
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
      margin-bottom: 10px;
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
      color: rgb(222, 72, 35);
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .footer {
      background-color: rgba(0, 0, 0, 0.8);
      color: rgb(20, 201, 210);
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }

    .connect-link {
      text-align: center;
      margin-top: 20px;
    }

    .connect-link a {
      color: rgb(10, 17, 1);
      text-decoration: underline;
      margin-right: 10px;
    }

    .contact-info {
      text-align: center;
      margin-top: 10px;
      color:greenyellow;
    }

    .contact-info p {
      margin-bottom: 5px;
    }

    .description {
      text-align: center;
      color: black;
      margin-top: 20px;
    }

    .description p {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="#" class="logo">
      <img src="logo.png" alt="Fitness Tracker Logo">
      Fitness Tracker
    </a>
    <h1>Welcome to Fitness Tracker</h1>
    <ul>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="home.php">Home</a></li>
      <li><a href="my_plan.php">My Plan</a></li>
      <li><a href="workouts.php">Workouts</a></li>
      <li><a href="stats.php">Stats</a></li>
      <li><a href="profile.php">Profile</a></li>
    </ul>
    <div class="connect-link">
      <a href="https://www.facebook.com/pascal.otieno">Connect with us on Facebook</a>
      <a href="https://www.twitter.com/pascal_otieno">Connect with us on Twitter</a>
    </div>
    <div class="contact-info">
      <p>Email: info@fitnesstracker.com</p>
      <p>Phone: +254707563451</p>
    </div>
    <div class="description">
      <p>Fitness Tracker is your ultimate companion on your fitness journey. With us, you can track your workouts, monitor your nutrition, set fitness goals, and track your progress along the way. Stay motivated and achieve your fitness goals with Fitness Tracker!</p>
    </div>
  </div>
  <div class="footer">
    &copy; 2023 Fitness Tracker. All rights reserved.
  </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Fitness Tracker - Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #26bfda;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .profile-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
    }

    .profile-info img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
    }

    .profile-content {
      flex-grow: 1;
      margin-left: 20px;
    }

    .profile-links {
      text-align: center;
      margin-top: 30px;
    }

    .profile-links a {
      color: #26bfda;
      text-decoration: none;
      margin: 0 10px;
    }

    .footer {
      background-color: #35d03a;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Fitness Tracker - Profile</h1>
  </div>

  <div class="container">
    <div class="profile-info">
      <?php
      // Assuming you have established a database connection and retrieved the user data
      // Replace the following lines with your database connection and query code

      // Example database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "fitness tracker";

      // Create a connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Placeholder user ID for demonstration
      $userId = 1;

      // Fetch user data from the database
      $sql = "SELECT * FROM user_profile WHERE user_id = $userId";
      $result = $conn->query($sql);

      if ($result !== false && $result->num_rows > 0) {
        $userData = $result->fetch_assoc();
      } else {
        $userData = [
          'name' => 'John Doe',
          'age' => 30,
          'gender' => 'Male',
          'height' => '180cm',
          'weight' => '75kg',
          'goal' => 'Lose Weight'
        ];
      }

      $conn->close();
      ?>

      <form action="update-profile.php" method="post" enctype="multipart/form-data">
        <img src="profile-picture.jpg" alt="Profile Picture">
        <div class="profile-content">
          <h2><?php echo $userData['name']; ?></h2>
          <p>Age: <?php echo $userData['age']; ?></p>
          <p>Gender: <?php echo $userData['gender']; ?></p>
          <p>Height: <?php echo $userData['height']; ?></p>
          <p>Weight: <?php echo $userData['weight']; ?></p>
          <p>Goal: <?php echo $userData['goal']; ?></p>
        </div>

        <label for="profile-picture">Upload Profile Picture:</label>
        <input type="file" id="profile-picture" name="profile-picture">

        <button type="submit">Update Profile</button>
      </form>
    </div>

    <div class="profile-links">
      <a href="menu.php">Menu</a>
      <a href="edit profile.php">Edit Profile</a>
      <a href="ex-pack.php">Exercise Packs</a>
      <a href="https://www.spotify.com/">Spotify</a>
    </div>
  </div>

  <div class="footer">
    &copy; 2023 Fitness Tracker. All rights reserved.
  </div>
</body>
</html>

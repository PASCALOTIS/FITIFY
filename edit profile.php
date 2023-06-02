<!DOCTYPE html>
<html>
<head>
  <title>Fitness Tracker - Edit Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #333;
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

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    button[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #555;
    }

    .footer {
      background-color: #e8880a;
      color: #9df52a;
      padding: 20px;
      text-align: center;
    }
  </style>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness tracker";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $height = $_POST["height"];
  $weight = $_POST["weight"];
  $goal = $_POST["goal"];

  $sql = "UPDATE user_profile SET name='$name', age=$age, gender='$gender', height='$height', weight='$weight', goal='$goal' WHERE user_id = 1";
  // Replace 1 with the actual user ID from your session or login mechanism

  if ($conn->query($sql) === TRUE) {
    echo "Profile updated successfully!";
  } else {
    echo "Error updating profile: " . $conn->error;
  }
}

$conn->close();
?>

</head>
<body>
  <div class="header">
    <h1>Edit Profile</h1>
  </div>

  <div class="container">
    <form action="update-profile.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <label for="height">Height:</label>
      <input type="number" id="height" name="height" required>

      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight" required>

      <label for="goal">Goal:</label>
      <input type="text" id="goal" name="goal" required>

      <button type="submit">Update Profile</button>
    </form>
    
    <div class="footer">
      <a href="profile.php">Go back to Profile Page</a>
    </div>
  </div>

  <div class="footer">
    &copy; 2023 Fitness Tracker. All rights reserved.
  </div>
</body>
</html>


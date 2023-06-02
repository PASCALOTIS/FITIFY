<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #3bdc23;
            margin-bottom: 30px;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form button {
            width: 100%;
            background-color: #3bdc23;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>

<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "fitness tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user details from the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, redirect to the menu page
        header("Location: menu.php");
        exit();
    } else {
        // User not found, display message and option to register
       // echo "<p>Invalid email or password. Please <a href='register.php'>register</a> to create an account.</p>";
    }
}

$conn->close();
?>
</body>
</html>

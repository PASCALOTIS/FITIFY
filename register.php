<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
    <h1>Registration</h1>
    <form action="register.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
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
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if user already exists in the database
    $checkSql = "SELECT * FROM users WHERE email='$email'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        // User already exists, display message and option to login
        echo "<p>User with this email already exists. Please <a href='login.php'>login</a> to your account.</p>";
    } else {
        // Insert user details into the database
        $insertSql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($insertSql) === TRUE) {
            // User registered successfully, redirect to login page
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
</body>
</html>


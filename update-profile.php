<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Database Configuration
$hostname = "localhost"; // Replace with your database hostname
$username = "root";      // Replace with your database username
$password = "";          // Replace with your database password
$database = "fitness tracker";   // Replace with your database name

// Create a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the username from the session
$username = $_SESSION['username'];

// Retrieve the user's profile data from the database
$query = "SELECT * FROM update_profile WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check if query execution was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if the user has a profile data
if (mysqli_num_rows($result) > 0) {
    // Fetch the profile data
    $row = mysqli_fetch_assoc($result);

    // Extract the profile data
    $weight = $row['weight'];
    $height = $row['height'];
    $goal = $row['goal'];
    $name = $row['name'];

    // Display the profile data
    echo "Weight: $weight<br>";
    echo "Height: $height<br>";
    echo "Goal: $goal<br>";
    echo "Name: $name<br>";
} else {
    echo "No profile data available.";
}

// Close the database connection
mysqli_close($conn);
?>


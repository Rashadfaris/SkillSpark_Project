<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'online_games';

    // Create a database connection
    $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);

    // Check for database connection errors
    if (!$connection) {
        die("Connection failed: " . print_r($connection->errorInfo(), true));
    }

    // Retrieve form data

    // Change the form field names to match the HTML form
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"]; 
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $username = $_POST["uname"]; 
    $password = $_POST["pass1"]; 

    // SQL query to insert data into the Registered_User table
    $sql = "INSERT INTO Registered_User (First_name, Last_name, DOB, Email, Username, Password) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement and execute it
    $stmt = $connection->prepare($sql);
    $stmt->execute([$first_name, $last_name, $dob, $email, $username, $password]);

    if ($stmt) {
        echo '<div style="background-color: green; color: white; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 10px; font-size:100px">Registration successful!</div>';
    } else {
        echo "Error: " . print_r($stmt->errorInfo(), true);
    }
} else {
    // Redirect back to the registration form if the form wasn't submitted
    header("Location:../Login.html");
    exit();
}
?>

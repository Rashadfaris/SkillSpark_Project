<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'online_games';

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $imageURL = $_POST['Image'];
    $news = $_POST['Description'];
    
   

    // SQL query to insert data into the database
    $sql = "INSERT INTO news (Image,Description)
            VALUES (?, ?)";

    // Create a prepared statement
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        // Bind the parameters
        $stmt->bind_param("ss",$imageURL,$news  );

        // Execute the statement
        if ($stmt->execute()) {
            echo '<div style="background-color: green; color: white; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 10px; font-size:100px">News added successfully!</div>';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>

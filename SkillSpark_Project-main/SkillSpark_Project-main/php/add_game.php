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
    $title = $_POST['title'];
    $price = $_POST['price'];
    $grade = $_POST['grade'];
    $category = $_POST['category'];
    $imageURL = $_POST['url'];
    $gameLink = $_POST['link'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO game (Title, Price, Grade_level, Category, Image_URL, Game_Link)
            VALUES (?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        // Bind the parameters
        $stmt->bind_param("ssssss", $title, $price, $grade, $category, $imageURL, $gameLink);

        // Execute the statement
        if ($stmt->execute()) {
            echo '<div style="background-color: green; color: white; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 10px; font-size:100px">Game added successfully!</div>';
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

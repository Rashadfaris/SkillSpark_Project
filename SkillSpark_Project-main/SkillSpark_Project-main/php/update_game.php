<?php
// Include your database connection configuration
require 'config1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $price = $_POST['Price']; 
    $grade = $_POST['Grade_level']; 
    $category = $_POST['Category']; 
    $imageURL = $_POST['Image_URL']; 
    $gameLink = $_POST['Game_Link']; 

    // SQL query to update the game details in the database
    $query = "UPDATE game SET Title = ?, Price = ?, Grade_level = ?, Category = ?, Image_URL = ?, Game_Link = ? WHERE Game_ID = ?";

    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ssssssi", $title, $price, $grade, $category, $imageURL, $gameLink, $gameId);

        if ($stmt->execute()) {
            $mysqli->commit(); // Commit changes to the database
            echo '<div style="background-color: green; color: white; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 10px; font-size:100px">Game details updated successfully!</div>';
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>

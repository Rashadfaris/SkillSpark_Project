<?php

require 'config1.php';

if (isset($_GET['id'])) {
    $gameId = $_GET['id'];

    // SQL query to delete the game
    $query = "DELETE FROM game WHERE Game_ID = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $gameId);
        if ($stmt->execute()) {
            echo "Game deleted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }
}

header("Location: view_game.php");
?>

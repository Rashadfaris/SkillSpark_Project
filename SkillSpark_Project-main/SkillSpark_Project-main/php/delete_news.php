<?php
require 'config1.php';

if (isset($_GET['id'])) {
    $newsId = $_GET['id'];

    // SQL query to delete the news entry
    $query = "DELETE FROM news WHERE news_ID = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $newsId);
        if ($stmt->execute()) {
            echo "News deleted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }
}

header("Location: view_news.php");
?>
<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Include the database connection code from config.php.
    include 'config.php';

    $news_id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($news_id) {
        // Fetch the news data to populate the form for editing
        $query = "SELECT * FROM news WHERE news_ID = :news_id";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':news_id', $news_id, PDO::PARAM_INT);
        $stmt->execute();

        // Check if news data was retrieved successfully
        if ($stmt->rowCount() == 1) {
            $news = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle form submission to update news details here
                $image_url = $_POST['image_url'];
                $description = $_POST['description'];

                // Update the news details in the database
                $updateQuery = "UPDATE news 
                                SET Image = :image_url, 
                                    Description = :description
                                WHERE news_ID = :news_id";
                $updateStmt = $connection->prepare($updateQuery);
                $updateStmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);
                $updateStmt->bindParam(':description', $description, PDO::PARAM_STR);
                $updateStmt->bindParam(':news_id', $news_id, PDO::PARAM_INT);
                $updateStmt->execute();

                header("Location:view_news.php");
            }
        } else {
            echo "News data not found."; 
        }
    }
} else {
    
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit News Details</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body class="edit-news-details" style="background-color: black;">
    <div class="edit-news-details-container" style="background-color: #fff;">
        <h1 class="edit-news-details-title">Edit News Details</h1>
        <form action="edit_news.php?id=<?php echo $news_id; ?>" method="post">
            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" value="<?php echo isset($news['Image']) ? $news['Image'] : ''; ?>"><br>

            <label for="description">Description:</label>
            <input type="text" name="description" value="<?php echo isset($news['Description']) ? $news['Description'] : ''; ?>"><br>

            <input type="submit" value="Save Changes">
        </form>
        <a href="view_news.php" class="cancel-link">
            <i class="fas fa-times"></i> Cancel
        </a>
    </div>
</body>
</html>

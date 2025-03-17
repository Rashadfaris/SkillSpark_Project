<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Include the database connection code from config.php.
    include 'config.php';

    $game_id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($game_id) {
        // Fetch the game's data to populate the form for editing
        $query = "SELECT * FROM game WHERE Game_ID = :game_id";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':game_id', $game_id, PDO::PARAM_INT);
        $stmt->execute();

        // Check if game data was retrieved successfully
        if ($stmt->rowCount() == 1) {
            $game = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle form submission to update game details here
                $title = $_POST['title'];
                $price = $_POST['price'];
                $grade_level = $_POST['grade_level'];
                $category = $_POST['category'];
                $image_url = $_POST['image_url'];
                $game_link = $_POST['game_link'];

                // Update the game details in the database
                $updateQuery = "UPDATE game 
                                SET Title = :title, 
                                    Price = :price, 
                                    Grade_level = :grade_level, 
                                    Category = :category, 
                                    Image_URL = :image_url, 
                                    Game_Link = :game_link 
                                WHERE Game_ID = :game_id";
                $updateStmt = $connection->prepare($updateQuery);
                $updateStmt->bindParam(':title', $title, PDO::PARAM_STR);
                $updateStmt->bindParam(':price', $price, PDO::PARAM_STR);
                $updateStmt->bindParam(':grade_level', $grade_level, PDO::PARAM_STR);
                $updateStmt->bindParam(':category', $category, PDO::PARAM_STR);
                $updateStmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);
                $updateStmt->bindParam(':game_link', $game_link, PDO::PARAM_STR);
                $updateStmt->bindParam(':game_id', $game_id, PDO::PARAM_INT);
                $updateStmt->execute();

                // Redirect back to the game details page after updating
                header("Location:view_game.php");
            }
        } else {
            echo "Game data not found."; // Handle the case where game data is not found
        }
    }
} else {
    // Redirect the user to the login page if they are not logged in.
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Game Details</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body class="edit-game-details" style="background-color: black;">
    <div class="edit-game-details-container" style="background-color: #fff;">
        <h1 class="edit-game-details-title">Edit Game Details</h1>
        <form action="edit_game.php?id=<?php echo $game_id; ?>" method="post">
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo isset($game['Title']) ? $game['Title'] : ''; ?>"><br>

            <label for="price">Price:</label>
            <input type="text" name="price" value="<?php echo isset($game['Price']) ? $game['Price'] : ''; ?>"><br>

            <label for="grade_level">Grade Level:</label>
            <input type="text" name="grade_level" value="<?php echo isset($game['Grade_level']) ? $game['Grade_level'] : ''; ?>"><br>

            <label for="category">Category:</label>
            <input type="text" name="category" value="<?php echo isset($game['Category']) ? $game['Category'] : ''; ?>"><br>

            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" value="<?php echo isset($game['Image_URL']) ? $game['Image_URL'] : ''; ?>"><br>

            <label for="game_link">Game Link:</label>
            <input type="text" name="game_link" value="<?php echo isset($game['Game_Link']) ? $game['Game_Link'] : ''; ?>"><br>

            <input type="submit" value="Save Changes">
        </form>
        <a href="game_details.php?id=<?php echo $game_id; ?>" class="cancel-link">
            <i class="fas fa-times"></i> Cancel
        </a>
    </div>
</body>
</html>

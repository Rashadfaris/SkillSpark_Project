<?php
session_start(); // Ensure you have a user session

// Constant user ID for testing (replace with your actual user ID)
$userID = 3;

if (isset($_POST['item_id'])) {
    $itemID = $_POST['item_id'];

    // Establish a database connection (replace with your database configuration)
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'online_games';

    try {
        $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Remove the product from the Cart table
        $query = "DELETE FROM cart WHERE item_No = ? AND User_ID = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$itemID, $userID]);

        // Return a response (e.g., success or error message)
        echo "Success"; // You can return a different response based on your needs
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Item ID not provided in the request.";
}
?>

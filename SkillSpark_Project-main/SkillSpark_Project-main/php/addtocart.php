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

        // Fetch product details based on the item_id
        $query = "SELECT title, price FROM shop WHERE item_id = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$itemID]);
        $product = $statement->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            // Insert the product into the Cart table
            $query = "INSERT INTO cart (item_No, Price, User_ID, Title) VALUES (?, ?, ?, ?)";
            $statement = $connection->prepare($query);
            $itemNo = $itemID; // Assuming item_No is the same as item_id
            $price = $product['price'];
            $title = $product['title'];
            $statement->execute([$itemNo, $price, $userID, $title]);

            // Return a response (e.g., success or error message)
            echo "Success"; // You can return a different response based on your needs
        } else {
            echo "Product not found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Item ID not provided in the request.";
}
?>

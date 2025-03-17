<?php
session_start(); // Ensure you have a user session

// Constant user ID for testing (replace with your actual user ID)
$userID = 3;

if (isset($_SESSION['user_id'])) {
    $userID = $_SESSION['user_id'];
}

// Establish a database connection (replace with your database configuration)
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'online_games';

try {
    $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch items in the cart for the current user
    $query = "SELECT * FROM cart WHERE User_ID = ?";
    $statement = $connection->prepare($query);
    $statement->execute([$userID]);

    $cartItems = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Calculate the total price
    $totalQuery = "SELECT SUM(Price) as total_price FROM cart WHERE User_ID = ?";
    $totalStatement = $connection->prepare($totalQuery);
    $totalStatement->execute([$userID]);
    $total = $totalStatement->fetch(PDO::FETCH_ASSOC);

    // Return the cart data as JSON
    $cartData = [
        'items' => $cartItems,
        'total_price' => $total['total_price'],
    ];

    header('Content-Type: application/json');
    echo json_encode($cartData);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

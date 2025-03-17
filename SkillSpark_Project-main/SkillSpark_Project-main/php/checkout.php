<?php
include('config.php'); // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get cart items and total amount from the POST data
    $cartItems = json_decode($_POST['cart_items']);
    $totalAmount = $_POST['total_amount'];

    // Replace these with actual user and cart information
    $userId = 3; // Replace with the actual user ID
    $cartId = 1; // Replace with the actual cart ID

    // Prepare and execute an SQL query to insert the cart data into the 'cart' table
    $query = "INSERT INTO cart (user_id, cart_id, title, total) VALUES (:user_id, :cart_id, :title, :total)";
    $stmt = $connection->prepare($query);

    // Bind parameters and execute the query
    $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
    $stmt->bindParam(':cart_id', $cartId, PDO::PARAM_INT);
    $stmt->bindParam(':title', $cartItems, PDO::PARAM_STR);
    $stmt->bindParam(':total', $totalAmount, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Cart data has been successfully added to the database
        // You can also perform other actions, such as clearing the shopping cart
        // or displaying a confirmation message to the user
        echo "Cart data added successfully.";
    } else {
        // Handle the case where the cart data couldn't be added to the database
        echo "Error: Cart data couldn't be added to the database.";
    }
}


if ($stmt->execute()) {
    // Cart data has been successfully added to the database
    // You can also perform other actions, such as clearing the shopping cart
    // or displaying a confirmation message to the user
    echo "Cart data added successfully.";
} else {
    // Handle the case where the cart data couldn't be added to the database
    echo "Error: Cart data couldn't be added to the database.";
    // Add the following line to see any database errors
    echo "Database Error: " . implode(" - ", $stmt->errorInfo());
}

?>

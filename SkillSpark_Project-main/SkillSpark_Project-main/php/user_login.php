<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'online_games';

    // Get user input
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['pass1']) ? $_POST['pass1'] : null;

    if ($email && $password) {
        try {
            // Create a PDO database connection
            $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Define the SQL query
            $qry = "SELECT * FROM registered_user WHERE `email` = :email AND `password` = :password";

            // Prepare and execute the query
            $stmt = $connection->prepare($qry);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // User found and logged in
                if ($email == "admin.skillspark@gmail.com") {
                    header('Location:../admin.php'); // Redirect to admin page
                } else {
                    $_SESSION['user_id'] = $stmt->fetchColumn(); // Store the user ID in the session
                    header('Location: home.php'); // Redirect to home page for other users
                }
                exit();
            } else {
                // Invalid username/password
                echo "Invalid username/password, please try again!";
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    } else {
        // Email or password not provided
        echo "Email or password not provided";
    }
} else {
    // Not a POST request
    echo "Invalid request";
}

?>

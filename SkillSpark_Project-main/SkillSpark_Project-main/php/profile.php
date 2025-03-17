<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Include the database connection code from config.php.
    include 'config.php';

    $user_id = $_SESSION['user_id'];

    // Query to fetch user details
    $query = "SELECT * FROM registered_user WHERE User_ID = :user_id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    // Fetch the user's details
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['delete_account'])) {
            // Handle delete account confirmation
            echo '<div class="confirmation-message">';
            echo 'Are you sure you want to delete your account?<br>';
            echo '<form method="post">';
            echo '<input type="submit" name="confirm_delete" value="Yes, delete my account">';
            echo '<input type="submit" name="cancel" value="Cancel">';
            echo '</form>';
            echo '</div>';
        } elseif (isset($_POST['confirm_delete'])) {
            // Handle account deletion
            $deleteQuery = "DELETE FROM registered_user WHERE User_ID = :user_id";
            $deleteStmt = $connection->prepare($deleteQuery);
            $deleteStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $deleteStmt->execute();

            // Log the user out and redirect to the login page after account deletion
            session_unset();
            session_destroy();
            header('Location:../login.php'); // Redirect to login.html
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body class="profile-page" style="background-color:black;">
    <div class="profile-container" style="background-color: #fff;">
        <h1 class="profile-title">My Profile</h1>
        <div class="profile-details">
            <div>
                <p>User ID: <?php echo $user['User_ID']; ?></p>
                <p>First Name: <?php echo $user['First_name']; ?></p>
                <p>Last Name: <?php echo $user['Last_name']; ?></p>
                <p>Date of Birth: <?php echo $user['DOB']; ?></p>
                <p>Email: <?php echo $user['Email']; ?></p>
                <p>Username: <?php echo $user['Username']; ?></p>
            </div>
        </div>
        <form method="post">
            <input type="submit" name="delete_account" value="Delete Account">
        </form>
        <a href="edit.php" class="edit-link">
            <i class="fas fa-edit"></i> Edit
        </a>
        <a href="home.html" class="home-link">
            <i class="fas fa-home"></i> Back to Home
        </a>
    </div>
</body>
</html>

<?php
} else {
    // Redirect the user to the login page if they are not logged in.
    header('Location: login.html');
}
?>


<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Include the database connection code from config.php.
    include 'config.php';

    $user_id = $_SESSION['user_id'];

    // Fetch the user's data to populate the form
    $query = "SELECT * FROM registered_user WHERE User_ID = :user_id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Check if user data was retrieved successfully
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle form submission to update user details here
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            
            // Update the user's profile in the database
            $updateQuery = "UPDATE registered_user 
                            SET First_name = :first_name, 
                                Last_name = :last_name, 
                                DOB = :dob, 
                                Email = :email, 
                                Username = :username 
                            WHERE User_ID = :user_id";
            $updateStmt = $connection->prepare($updateQuery);
            $updateStmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
            $updateStmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            $updateStmt->bindParam(':dob', $dob, PDO::PARAM_STR);
            $updateStmt->bindParam(':email', $email, PDO::PARAM_STR);
            $updateStmt->bindParam(':username', $username, PDO::PARAM_STR);
            $updateStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $updateStmt->execute();
            
            // Redirect back to the profile page after updating
            header('Location: profile.php');
        }
    } else {
        echo "User data not found."; // Handle the case where user data is not found
    }
} else {
    // Redirect the user to the login page if they are not logged in.
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body class="edit-profile-page" style="background-color:black;">
    <div class="edit-profile-container" style="background-color: #fff;">
        <h1 class="edit-profile-title">Edit Profile</h1>
        <form action="edit.php" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" value="<?php echo isset($user['First_name']) ? $user['First_name'] : ''; ?>"><br>
            
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" value="<?php echo isset($user['Last_name']) ? $user['Last_name'] : ''; ?>"><br>
            
            <label for="dob">Date of Birth:</label>
            <input type="text" name="dob" value="<?php echo isset($user['DOB']) ? $user['DOB'] : ''; ?>"><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo isset($user['Email']) ? $user['Email'] : ''; ?>"><br>
            
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo isset($user['Username']) ? $user['Username'] : ''; ?>"><br>

            <input type="submit" value="Save Changes">
        </form>
        <a href="profile.php" class="cancel-link">
            <i class="fas fa-times"></i> Cancel
        </a>
    </div>
</body>
</html>


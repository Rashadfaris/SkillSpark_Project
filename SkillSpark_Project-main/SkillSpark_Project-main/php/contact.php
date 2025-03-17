<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'online_games';

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : '';
    $question = isset($_POST["Question"]) ? $_POST["Question"] : '';  

    if (empty($email) || empty($subject) || empty($question)) {
        echo "Email, Subject, and Question cannot be empty.";
    } else {
        $sql = "INSERT INTO faq (email, subject, Question) VALUES (?, ?, ?)";
        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
        }

        if ($stmt->bind_param("sss", $email, $subject, $question)) {
            if ($stmt->execute()) {
                header("Location:../Contact_Us.html");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Binding parameters failed.";
        }
    }
}
?>

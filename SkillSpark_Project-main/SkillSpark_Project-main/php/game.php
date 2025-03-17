<?php
include('config1.php'); // Include the configuration file to establish the database connection

// Query to fetch data from the game table, selecting only the specified columns
$sql = "SELECT Title, Image_URL, Game_Link FROM game";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col">';
        echo '<div class="card">';
        echo '<img src="' . $row['Image_URL'] . '" alt="' . $row['Title'] . '" width="305px" height="250px">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['Title'] . '</h5>';
        echo '<a class="card-link" href="' . $row['Game_Link'] . '" target="_blank">Play</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No data found in the game table.";
}

$mysqli->close();
?>

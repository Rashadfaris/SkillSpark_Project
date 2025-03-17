<?php
include('config1.php'); 

$sql = "SELECT Image, Description FROM news";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col">';
        echo '<div class="card">';
        echo '<img src="' . $row['Image'] . '" alt="News Image" width="305px" height="250px">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['Description'] . '</h5>';
        // Add any additional details or links you want to display for news items here.
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No data found in the news table.";
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Game</title>
   <style>
    table {
            
            border-collapse: collapse;
            width: 70%; /* Set the width of the table */
            margin: 0 auto; /* Center the table horizontally */
            border: 1px solid #000; /* Add a border to the table */
        }

        th, td {
            border: 1px solid #000; /* Add a border to table cells */
            padding: 8px;
            text-align: left;
        }

        th,tr {
            background-color: #f2f2f2; /* Gray background for table header */
        }

        h1{
            color:white;
            text-align:center;
            font-size:20px;
        }
        </style>
</head>


<body>
    <main>
        <header style="background-color: black;">
            <h1 style="color:#fff;">Games</h1>
        </header>
    </main>

    <div class="container">
        <?php
        // Include your database connection configuration
        require 'config1.php';

        // Query to retrieve data from the "faq" table
        $query = "SELECT 
        Game_ID,Title,Price,Grade_level,Category,Image_URL,Game_Link FROM game";
    $result = $mysqli->query($query);

    if ($result) {
        echo '<h1>REGISTERED USERS</h1>';
        echo '<table>';
        echo '<tr>';
        echo '<th>Game ID</th>';
        echo '<th>Title</th>';
        echo '<th>Price</th>';
        echo '<th>Grade level</th>';
        echo '<th>Category</th>';
        echo '<th>Image URL</th>';
        echo '<th>Game Link</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            $GameID = $row['Game_ID'];
            $Title = $row['Title'];
            $Price = $row['Price'];
            $Glevel= $row['Grade_level'];
            $category = $row['Category'];
            $URL= $row['Image_URL'];
            $Link = $row['Game_Link'];

            echo '<tr>';
            echo '<td>' . $GameID . '</td>';
            echo '<td>' . $Title . '</td>';
            echo '<td>' . $Price . '</td>';
            echo '<td>' . $Glevel . '</td>';
            echo '<td>' . $category . '</td>';
            echo '<td>' . $URL . '</td>';
            echo '<td>' . $Link . '</td>';
            echo '<td><a href="edit_game.php?id=' . $GameID . '">Edit</a></td>';
            echo '<td><a href="delete_game.php?id=' . $GameID . '">Delete</a></td>'; 
            echo '</tr>';
        }

        echo '</table>';

        // Close the result set
        $result->close();
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
    ?>
    </div>

</body>
</html>

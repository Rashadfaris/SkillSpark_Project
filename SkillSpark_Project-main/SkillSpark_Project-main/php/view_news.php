<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View News</title>
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
            <h1 style="color: #fff;">News</h1>
        </header>
    </main>

    <div class="container">
        <?php
        // Include your database connection configuration
        require 'config1.php';

        // Query to retrieve data from the "news" table
        $query = "SELECT news_ID, Image, Description FROM news";
        $result = $mysqli->query($query);

        if ($result) {
            echo '<h1>NEWS</h1>';
            echo '<table>';
            echo '<tr>';
            echo '<th>News ID</th>';
            echo '<th>Image URL</th>';
            echo '<th>News</th>';
            echo '</tr>';

            while ($row = $result->fetch_assoc()) {
                $news_ID = $row['news_ID'];
                $imageURL = $row['Image'];
                $news = $row['Description'];

                echo '<tr>';
                echo '<td>' . $news_ID . '</td>';
                echo '<td>' . $imageURL . '</td>';
                echo '<td>' . $news . '</td>';
                echo '<td><a href="edit_news.php?id=' . $news_ID . '">Edit</a></td>';
                echo '<td><a href="delete_news.php?id=' . $news_ID . '">Delete</a></td>';
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

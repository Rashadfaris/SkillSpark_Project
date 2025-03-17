<!DOCTYPE html>
<html>
<head>
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
<body style=background-color:black>
    <?php
    // Include your database connection configuration
    require 'config1.php';

    // Query to retrieve data from the "faq" table
    $query = "SELECT User_ID, First_name, Last_name, DOB, Email, Username FROM registered_user";
    $result = $mysqli->query($query);

    if ($result) {
        echo '<h1>REGISTERED USERS</h1>';
        echo '<table>';
        echo '<tr>';
        echo '<th>User_ID</th>';
        echo '<th>First Name</th>';
        echo '<th>Last Name</th>';
        echo '<th>DOB</th>';
        echo '<th>Email</th>';
        echo '<th>Username</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            $UserId = $row['User_ID'];
            $Fname = $row['First_name'];
            $Lname = $row['Last_name'];
            $DOB = $row['DOB'];
            $email = $row['Email'];
            $Uname = $row['Username'];

            echo '<tr>';
            echo '<td>' . $UserId . '</td>';
            echo '<td>' . $Fname . '</td>';
            echo '<td>' . $Lname . '</td>';
            echo '<td>' . $DOB . '</td>';
            echo '<td>' . $email . '</td>';
            echo '<td>' . $Uname . '</td>';
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
</body>
</html>

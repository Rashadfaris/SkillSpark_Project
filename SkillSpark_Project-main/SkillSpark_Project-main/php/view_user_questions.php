<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .faq-question {
            font-weight: bold;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            margin-top: 10px;
        }

        .faq-question::after {
            content: "+";
            float: right;
        }

        .faq-item.open .faq-question::after {
            content: "-";
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        .delete-button {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <header style="background-color: black;">
            <h1 style="color:#fff;">Questions From users</h1>
        </header>
    </main>

    <div class="container">
        <?php
        // Include your database connection configuration
        require 'config1.php';

        if (isset($_POST['delete_question'])) {
            $questionId = $_POST['question_id'];

            // Perform the delete query in your database
            $deleteQuery = "DELETE FROM faq WHERE FAQ_ID = ?";
            $stmt = $mysqli->prepare($deleteQuery);
            $stmt->bind_param("i", $questionId);

            if ($stmt->execute()) {
                 // Redirect back to the FAQ page after deletion
                header("Location:view_user_questions.php");
                exit();
            } else {
                echo "Error deleting question: " . $mysqli->error;
            }

            $stmt->close();
        }

        // Query to retrieve data from the "faq" table
        $query = "SELECT FAQ_ID, Question, email, subject FROM faq";
        $result = $mysqli->query($query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $questionId = $row['FAQ_ID'];
                $Question = $row['Question'];
                $email = $row['email'];
                $subject = $row['subject'];

                echo '<div class="faq-item">';
                echo '<div class="faq-question">' . $subject . '</div>';
                echo '<div class="faq-answer">';
                echo 'Email: <a href="mailto:' . $email . '">' . $email . '</a><br>';
                echo ' Question: ' . $Question;

                // Delete button
                echo '<form action="view_user_questions.php" method="post">';
                echo '<input type="hidden" name="question_id" value="' . $questionId . '">';
                echo '<button class="delete-button" type="submit" name="delete_question">Delete</button>';
                echo '</form>';

                echo '</div>';
                echo '</div>';
            }

            // Close the result set
            $result->close();
        } else {
            echo "Error: " . $mysqli->error;
        }

        // Close the database connection
        $mysqli->close();
        ?>
    </div>

    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            question.addEventListener('click', () => {
                item.classList.toggle('open');
            });
        });
    </script>
</body>
</html>

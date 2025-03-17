<!doctype html>
<html lang="en">
<head>
    <!-- Your head content -->
</head>
<body>
    <!-- Your navigation and other content -->

    <!-- Display the search results in this section -->
    <div class="stacked-content">
        <main style="color: #000; background-color: #060612;">
            <div id="search-results" class="container py-5">
                <h3 class="h2-responsive fw-bold text-center my-2" style="color: white">Search Results</h3>
                
                <br>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
                    if (isset($_GET['query']) && !empty($_GET['query'])) {
                        $searchQuery = $_GET['query'];

                        // Include the database connection configuration
                        include('config1.php');

                        // Prepare and execute a database query
                        $sql = "SELECT Title, Image_URL, Game_Link FROM game WHERE Title LIKE '%$searchQuery%'";
                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col">';
                                echo '<div class="card" style="text-align: center;">';
                                echo '<img src="' . $row['Image_URL'] . '" alt="' . $row['Title'] . '" width="305px" height="250px">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title" style="color: white; font-size: 20px;">' . $row['Title'] . '</h5>';
                                echo '<a class="btn btn-primary" style="background-color: blue; color: white; padding:10px 20px 10px; border-radius:5px;" href="' . $row['Game_Link'] . '" target="_blank">Play</a>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
    
                            
                        } else {
                            echo "<p>No results found for: " . htmlspecialchars($searchQuery) . "</p>";
                        }
                    } else {
                        echo "No search query provided.";
                    }
                    ?>
                </div>
                <br>
            </div>
        </main>
    </div>
    
    <!-- Your footer content -->
</body>
</html>

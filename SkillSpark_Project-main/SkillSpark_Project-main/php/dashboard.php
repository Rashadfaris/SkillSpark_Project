<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SkillSpark</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
            <title>SKILLSPARK</title>
            <link rel="stylesheet" href="../styles/styles.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Trochut:wght@700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
            <script src="java.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
           
        
        <title>Skillspark</title>
    </head>
    <body>
  <!-- Navbar begins -->
<nav id="navb" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark bg-gradient">
    <div class="container">
        <img src="../src/images/car.jpg" alt="Logo" width="50" height="50">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="../admin.php">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="../Adaptive_Learning.html">Adaptive Learning</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="../User_guides.html">User Guides</a>
                </li>

                <li class="nav-item mx-4">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="header-right">
                    <div class="account-type text-center">
                        <img class="profile-picture" src="../src/images/pp.png" alt="Profile Picture">
                        <span><a href="profile.php">Profile</a></span>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>

<!-- Navbar ends -->

<!--trending-->
<main style="color: #000; background-color: #060817;">
    <div id="trending" class="container py-5">
        <h3 class="h2-responsive fw-bold text-center my-2" style="color: white">Whats Trendin?
          </h3>

          <h3 class="h2-responsive fw-bold text-center my-2" style="color: white">Dashboard
          </h3>
        <p class="text-center w-reposnsive mx-auto mb-1" style="color: white">Explore all the categories of Blogs available within the site through a single click!
          </p>
        <br>
        <p style="color:white; text-align: left;">USER STATISTICS</p>
        <br>
        <div style="width:700px;height:450px;">
            <canvas id="myChart" width="400px" height="200px"></canvas>

            <script>
                // Data for the chart
                var data = {
                    labels: ['January', 'February', 'March', 'April', 'May','June','July','August','September'],
                    datasets: [{
                        label: 'Users',
                        data: [65, 59, 80, 81, 56,73,57,82,68],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Create a bar chart
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data
                });
            </script>
        </div>
        <br><br>
        <hr style="color:white;">
        <br>
        
        <p style="color:white; text-align: left;">GAMES</p>
        <br>
        <div style="width:500px;height:350px;">
            <canvas id="gameCategoryChart"></canvas>

            <script>
                // Data for the pie chart
                var data = {
                    labels: ['Math', 'Language and Arts', 'Coding and Technology', 'Science', 'History', 'Life Skills', 'Logic and Problem Solving'],
                    datasets: [{
                        data: [15, 12, 10, 8, 7, 5, 6],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(75, 192, 192, 1)',
                        ],
                    }]
                };
        
                // Create a pie chart
                var ctx = document.getElementById('gameCategoryChart').getContext('2d');
                var gameCategoryChart = new Chart(ctx, {
                    type: 'pie',
                    data: data,
                });
            </script>
        </div>
        <br><br>
        <hr style="color:white;">
        <br>
        <p style="color:white; text-align: left;">INCOME STATISTICS</p>
        <br>
        <div style="width:700px;height:450px;">
            <canvas id="incomeChart"></canvas>
            <script>
                // Data for the line chart
                var data = {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
                    datasets: [{
                        label: 'Monthly Income',
                        data: [1000, 1200, 1300, 1500, 1600, 1800, 1900, 2000, 2100],
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }]
                };
        
                // Create a line chart
                var ctx = document.getElementById('incomeChart').getContext('2d');
                var incomeChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
        
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card">
                <div class="card-body" style="background-color: #060817;">
                    <h5 class="card-title" style="color:white;">Game Management</h5>
                    <p class="card-text" style="color:white;">Manage Your games</p>
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#mdlAddgame" style="background-color: #060817;">
                        <h6 style="color:white;">Add Game</h6>
                     </button><br><br>

                     <button type="button" class="btn btn-outline-light" style="background-color: #060817;" onclick="redirectToviewgame()">
                         <h6 style="color:white;">View Game</h6>
                    </button><br><br>
                    <script>
                         function redirectToviewgame() {
                        // Redirect to the "view_user.php" page
                        window.location.href = "view_game.php";
}
                        </script>


                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card">
                <div class="card-body" style="background-color: #060817;">
                    <h5 class="card-title" style="color:white;">User Management</h5>
                    <p class="card-text" style="color:white;">This section allows you to manage users.</p>
                    <button type="button" class="btn btn-outline-light" style="background-color: #060817;" onclick="redirectToViewUsers()">
                         <h6 style="color:white;">View Users</h6>
                    </button>
                    <br><br><br>

                    <script>
                         function redirectToViewUsers() {
                        // Redirect to the "view_user.php" page
                        window.location.href = "view_user.php";
}
                        </script>
  
                    <button type="button" class="btn btn-outline-light" style="background-color: #060817;" onclick="redirectToViewUserquestions()">
                        <h6 style="color:white;">View User Questions </h6>
                    </button>
                    <script>
                         function redirectToViewUserquestions() {
                        // Redirect to the "view_user.php" page
                        window.location.href = "view_user_questions.php";
}
                        </script>

                    <br><br><br>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body" style="background-color: #060817;">
                    <h5 class="card-title" style="color:white;">Content Management</h5>
                    <p class="card-text" style="color:white;">This section allows you to manage content.</p>
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#mdlNews" style="background-color: #060817;">
                        <h6 style="color:white;">Add News</h6>
                    </button>
                    <br><br>
  
                    <button type="button" class="btn btn-outline-light" style="background-color: #060817;" onclick="redirectToViewNews()">
                        <h6 style="color:white;">View News </h6>
                    </button>
                    <script>
                         function redirectToViewNews() {
                        window.location.href = "view_news.php";
                        }
                        </script>
                    <br><br>

                  

                    
                </div>
            </div>
        </div>
        </div>
    </div>
</main>


<div class="modal fade" id="mdlAddgame" tabindex="-1" aria-labelledby="mdlAddgameLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlAddgameLabel">Add Game</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_game.php" method="post">
      <div class="modal-body">
      
            
                <div class="mb-3">
                    <label for="title" class="form-label"> Game Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>


                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>


                <div class="mb-3">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">category</label>
                    <input type="text" class="form-control" id="category" name="category">
                </div>


                <div class="mb-3">
                    <label for="url" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="url" name="url">
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Game Link</label>
                    <input type="text" class="form-control" id="link" name="link">
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Complete ">
      </div>
</form>
    </div>
  </div>
</div>


<div class="modal fade" id="mdlNews" tabindex="-1" aria-labelledby="mdlNewsLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="NewsLabel">Add News</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_news.php" method="post">
    <div class="modal-body">
        <div class="mb-3">
            <label for="Image" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="Image" name="Image">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">News</label>
            <input type="text" class="form-control" id="Description" name="Description">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Complete">
    </div>
</form>

    </div>
  </div>
</div>

 
<!-- Footer -->
  <footer style="background-color: #333; color: #fff;">
    <div class="footer-container">
        <div class="footer-section">
            <h3>Educational tools</h3>
            <ul class="footer-links">
                <li><a href="../admin.php">Home</a></li>
                <li><a href="../Adaptive_Learning.html">Adaptive Learning</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="../User_guides.html">User guides</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Resources</h3>
            <ul class="footer-links">
                <li><a href="faq_data.php">FAQ</a></li>
                <li><a href="../About_Us.html">About Us</a></li>
                <li><a href="../Contact_Us.html">Contact Us</a></li>
                <li><a href="faq_data.php">Help</a></li>
            </ul>
        </div>
    </div>
    
     
<!-- Transparent bar with links -->
<div class="footer-bar">
    <a href="../Terms_Of_Privacy_Policy.html" class="footer-link">
        <i class="fas fa-lock"></i> Terms of Privacy Policy
    </a>
    <div class="social-icons">
        <a href="https://www.facebook.com" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.twitter.com" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://plus.google.com" class="social-icon" target="_blank"><i class="fab fa-google-plus"></i></a>
    </div>
</div>
</footer>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>      
   
 <div id="site-usage-rating" style="position: fixed; width: 80px; height: 80px; bottom: 40px; right: 40px; color: black; border-radius: 50px; text-align: center; z-index: 9999; font-size: 13px; padding: 6px; font-family: monospace; line-height: 15px; overflow-wrap: normal; background-color: green; opacity: 0;">Site Malicious Rate<br><b>0.0</b></div></body></html>
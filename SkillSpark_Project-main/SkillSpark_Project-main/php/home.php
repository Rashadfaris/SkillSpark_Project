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

        
        <title>Skillspark
   </title>
   
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
                    <a class="nav-link active" aria-current="page" href="php/home.php">Home</a>
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


                <button type="button" class="btn btn-outline-light" >
                    <a class="nav-link" href="../parent.html">Parental control</a>
                    </button>
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
<div id="HeroImage" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="d-block w-100" autoplay loop muted>
                <source src="/iwt/SRC/video/display.MP4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h4 style="color: #000;">Welcome to</h4>
                <h1 style="color: #000;">SkillSpark</h1>
                <p style="color:#000000">Your one-stop site for all educational entertainment!</p>
            </div>
        </div>
    </div>
</div>

<!--trending-->
<main style="color: #000; background-color: #060817;">
    <div id="trending" class="container py-5">
        <h3 class="h2-responsive fw-bold text-center my-2" style="color: white">Whats Trending?
          </h3>
        <p class="text-center w-reposnsive mx-auto mb-1" style="color: white">Explore all the categories of Blogs available within the site through a single click!
          </p>
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php include('news.php'); ?>
        </div>
        <br>
    </div>
</main>



    <div class="stacked-content">

        <main style="color: #000; background-color: #060612;">
            <div id="blogcategories" class="container py-5">
                <h3 class="h2-responsive fw-bold text-center my-2" style="color: white">Games
                  </h3>
                <p class="text-center w-reposnsive mx-auto mb-1" style="color: white">Enjoy all the categories of Games available within the site through a single click!
                  </p>

                  <form action="search.php" method="get" class="text-center">
    <div class="row justify-content-center">
        <div class="col-6"> <!-- Adjust the col-6 width as needed -->
            <input type="text" name="query" placeholder="Search Games" class="form-control">
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-6"> <!-- Adjust the col-6 width as needed -->
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </div>
    </div>
</form>


                <br>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php include('game.php'); ?>
                </div>
                <br>
                
</div>
    

  <!-- Footer -->
  <footer style="background-color: #333; color: #fff;">
    <div class="footer-container">
        <div class="footer-section">
            <h3>Educational tools</h3>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="../Adaptive_Learning.html">Adaptive Learning</a></li>
                <li><a href="../shop.php">Shop</a></li>
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

</body>
</html>
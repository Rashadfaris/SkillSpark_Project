<html lang="en"><head>
        
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Open Page</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 <link rel="stylesheet" href="styles/styles.css">
    <title>
       open page !
    </title>
   </head>
   
   <body class="" style="">
          
<div id="HeroImage" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="SRC/images/car.jpg" class="d-block w-100" alt="HomeCarousel"> 
                 <div class="carousel-caption d-none d-md-block">
                 <h4>Welcome to</h4>
                 <h1>SkillSpark</h1>
                 <p style="color: #fff;">Your one stop site for all educational entertainment!</p>
               
                 <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#mdlRegister">
                     Sign-Up
                     </button>
                 <br> <br>
                 
 
                 <!-- Button trigger modal -->
                     <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#mdlLogin">
                      Login 
                     </button>
         
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
        <?php include('php/news.php'); ?>
        </div>
        <br>
    </div>
</main>

 <!-- Modal -->
 <div class="modal fade" id="mdlRegister" tabindex="-1" aria-labelledby="mdlRegisterLabel" style="display: none;" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="mdlRegisterLabel">Sign-Up</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <form action="php/register.php" method="post">
       <div class="modal-body">
       
             
                 <div class="mb-3">
                     <label for="fname" class="form-label">First Name</label>
                     <input type="text" class="form-control" id="fname" name="fname">
                 </div>

                 <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                
                <div class="mb-3">
                    <label for="uname" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>
 
 
                 <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="text" class="form-control" id="email" name="email">
                 </div>
 
                 <div class="mb-3">
                     <label for="dob" class="form-label">DOB</label>
                     <input type="date" class="form-control" id="dob" name="dob">
                 </div>
 
                 <div class="mb-3">
                     <label for="pass1" class="form-label">Password</label>
                     <input type="password" class="form-control" id="pass1" name="pass1">
                 </div>
 
                 <div class="mb-3">
                     <label for="pass2" class="form-label">Re-Enter Password</label>
                     <input type="password" class="form-control" id="pass2" name="pass2">
                 </div>
             
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
         <input type="submit" class="btn btn-success" value="Complete Registration">
       </div>
 </form>
     </div>
   </div>
 </div>
 
        
         
         
 <div class="modal fade" id="mdlLogin" tabindex="-1" aria-labelledby="mdlLoginLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="mdlLoginLabel">Login</h1>
        </div>
        <form action="php/user_login.php" method="post">
        <div class="modal-body">
        
              
                 <div class="modal-body">
                 <div class="mb-3">
                     <label for="email" class="form-label">username</label>
                     <input type="text" class="form-control" id="email" name="email">
                 </div>
 
                 <div class="mb-3">
                     <label for="pass1" class="form-label">Password</label>
                     <input type="password" class="form-control" id="pass1" name="pass1">
                 </div>
                  
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" value="Login">
        </div>
  </form>
      </div>
    </div>
  </div>

 
     <!-- Footer -->
 <footer class="text-center text-lg-start bg-dark text-muted pt-3">
     
 
   <!-- Section: Links  -->
   <section class="">
    <footer style="background-color: #333; color: #fff;">
    
            <div class="footer-section">
                <h3>Resources</h3>
                <ul class="footer-links">
                    <li><a href="php/faq_data.php">FAQ</a></li>
                    <li><a href="About_Us.html">About Us</a></li>
                    <li><a href="Contact_Us.html">Contact Us</a></li>
                    <li><a href="php/faq_data.php">Help</a></li>
                </ul>
            </div>
        </div>
 
         
 </footer>
 <!-- Footer -->
 
 
 
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>      
   
 <div id="site-usage-rating" style="position: fixed; width: 80px; height: 80px; bottom: 40px; right: 40px; color: black; border-radius: 50px; text-align: center; z-index: 9999; font-size: 13px; padding: 6px; font-family: monospace; line-height: 15px; overflow-wrap: normal; background-color: green; opacity: 0;">Site Malicious Rate<br><b>0.0</b></div></body></html>
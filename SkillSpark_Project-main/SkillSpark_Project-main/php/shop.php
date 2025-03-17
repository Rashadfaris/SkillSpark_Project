
<?php
include('config.php'); 

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SkillSpark</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
            <title>SKILLSPARK</title>
            <link rel="stylesheet" href="../styles/styles2.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Trochut:wght@700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
            <script src="java.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            
        <title>Shop</title>
    </head>
    <body>
        <!-- Navbar begins -->
        <nav id="navb" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark bg-gradient ">
            <div class="container">
                <img src="src/images/car.jpg" alt="Logo" width="50" height="50">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
       
        <li class="nav-item mx-4">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link" href="../Adaptive_Learning.html">Adaptive Learning</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link active" href="Shop.php">Shop</a>
        </li>
        <li class="nav-item mx-4">
            <a class="nav-link" href="../User_guides.html">User Guides</a>
        </li>
    </ul>
    <!-- <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#mdlRegister">Login</a>
      </ul> -->
</div>
</div></nav>
<!-- Navbar ends -->
<div id="HeroImage" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="" class="d-block w-100" height="800" alt="HomeCarousel">
            <div class="carousel-caption d-none d-md-block">
                <h1>Shop</h1>
            </div>
        </div>
    </div>
</div>
        <!--muaz-->
       <section class="main">
        <!--leftcontainer-->
        <div class="leftContainer">
          
            <button class="sidebarbtn" style="background-color: #333333b1">Shop</button>
            <button class="sidebarbtn" style="background-color: #333333b1">Category</button>
            <button class="sidebarbtn" style="background-color: #333333b1">Price Range</button>
            <button class="sidebarbtn" style="background-color: #333333b1">offers</button>  
            </ul>
        </div>
        <!--middlecontainer-->
                <div class="middleContainer">
            <h1>Products</h1>

            <?php
            $dbHost = 'localhost';
            $dbUser = 'root';
            $dbPassword = '';
            $dbName = 'online_games';

            try {
                $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "SELECT * FROM shop";
                $statement = $connection->query($query);

                if ($statement) {
                    // Fetch and display the results
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="product">';
                        echo '<img src="' . $row['image_url'] . '" width="70" height="70">';
                        echo '<h6 class="iname">' . $row['title'] . '</h6>';
                        echo '<div class="amount"><p>$' . $row['price'] . '</p></div>';
                        echo '<button class="add-to-cart" data-item-id="' . $row['item_id'] . '">Add to Cart</button>';
                        echo '<button class="remove-from-cart" data-item-id="' . $row['item_id'] . '">Remove</button>';
                        echo '</div>';
                    }
                } else {
                    // Query failed
                    echo "Query failed: " . $connection->errorInfo()[2];
                }
            } catch (PDOException $e) {
                die('Error: ' . $e->getMessage());
            }
            ?>
        </div>

        <!--rightcontainer-->
            <div class="rightContainer">
                <h4 style="color: #fff;">Similar Products</h4>
                <div class="side-product">
                    <img src="product1.jpg">
                    <p class="sproduct">Product1</p>
                    <p class="amount2">$10</p>
                </div>
                <div class="side-product">
                    <img src="product1.jpg">
                    <p class="sproduct">Product1</p>
                    <p class="amount2">$10</p>
                </div>
                <div class="side-product">
                    <img src="product1.jpg">
                    <p class="sproduct">Product1</p>
                    <p class="amount2">$10</p>
                </div>
                <div class="side-product">
                    <img src="product1.jpg">
                    <p class="sproduct">Product1</p>
                    <p class="amount2">$10</p>
                </div> 
                <!--cart-->   
                <h3 style="color: #fff;">Cart List</h3>
                <div id="cart" style="color: #fff;">
                        <!-- Cart items will be displayed here -->

                        <!-- Cart Section -->
<div class="cart-section">
    <h2>Your Cart</h2>
    
    <?php
    // Fetch items in the cart for the current user
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'online_games';

    try {
        $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch items in the cart for the current user
        $userID = 3; // Constant user ID for testing
        $query = "SELECT * FROM cart WHERE User_ID = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$userID]);

        if ($statement->rowCount() > 0) {
            // Display the items in the cart
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="cart-item">';
                echo '<p><strong>' . $row['Title'] . '</strong> - Price: $' . number_format($row['Price'], 2) . '</p>';
                echo '</div>';
            }

            // Calculate and display the total price with two decimal places
            $totalQuery = "SELECT SUM(Price) as total_price FROM cart WHERE User_ID = ?";
            $totalStatement = $connection->prepare($totalQuery);
            $totalStatement->execute([$userID]);
            $total = $totalStatement->fetch(PDO::FETCH_ASSOC);

            echo '<div class="total-price">';
            echo '<p>Total Price: $' . number_format($total['total_price'], 2) . '</p>';
            echo '</div>';
        } else {
            echo '<p>Your cart is empty.</p>';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</div>




                </div>
                    <div id="total-amount">
                         <!-- Display total amount here -->
                    </div>
                    <button type="button"  class="buy-button" data-bs-toggle="modal" data-bs-target="#mdlpay" style="color: #fff;">
                        Buy now
                        <!-- btn btn-light -->
                    </button>      
                </div>          
            </div> 
         
    </section>
                <!-- Modal -->
 <div class="modal fade" id="mdlpay" tabindex="-1" aria-labelledby="mdlpay" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="mdlpayLabel">Payment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="php/register.php" method="post">
        <div class="modal-body">
 
                  
                 <div class="imgcart"><img src="SRC/images/payimg2.jpg" width="150px" height="150px"></div>  
                 <!-- <h5 class="heading">YOUR ORDER</h5> -->

                 <div class="order">
    <p>TOTAL AMOUNT: $<?php echo number_format($total['total_price'], 2); ?></p>
</div>


                  <div class="mb-3">
                     <h6 class="heading1">ENTER CARD DETAILS</h6>
                      <label for="fname" class="form-label">CardHolder Name</label>
                      <input type="text" class="form-control" id="fname" name="fname">
                  </div>
 
                  <div class="mb-3">
                     <label for="lname" class="form-label">Card Number</label>
                     <input type="" class="form-control" id="lname" name="lname">
                 </div>
 
                  <div class="mb-3">
                      <label for="dob" class="form-label">Expiry</label>
                      <input type="date" class="form-control1" id="dob" name="dob">
                  </div>
 
                  <div class="mb-3">
                     <label for="lname" class="cn">CVC</label>
                     <input type="" class="form-control2" id="lname" name="lname">
                 </div>
                 <label for="lname" class="cnn">Select Card Type</label>
                 <img class="visa" src="SRC/images/visa.png" width="60" height="70">
                 <img class="master" src="SRC/images/master.jpg" width="50" height="40">
                
                 <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
                  
                  
  
                  
              
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" value="Submit">
        </div>
  </form>
      </div>
    </div>
  </div>
 
  
  
  
  
  
  
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>      
    
  <div id="site-usage-rating" style="position: fixed; width: 80px; height: 80px; bottom: 40px; right: 40px; color: black; border-radius: 50px; text-align: center; z-index: 9999; font-size: 13px; padding: 6px; font-family: monospace; line-height: 15px; overflow-wrap: normal; background-color: green; opacity: 0;">
     Site Malicious Rate<br><b>0.0</b>
 </div>
          <!-- Footer -->
  <footer style="background-color: #333; color: #fff;">
    <div class="footer-container">
        <div class="footer-section">
            <h3>Educational tools</h3>
            <ul class="footer-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="../Adaptive_Learning.html">Adaptive Learning</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="../User_guides.html">User guides</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Resources</h3>
            <ul class="footer-links">
                <li><a href="FAQ.html">FAQ</a></li>
                <li><a href="About_Us.html">About Us</a></li>
                <li><a href="Contact_Us.html">Contact Us</a></li>
                <li><a href="Help.html">Help</a></li>
            </ul>
        </div>
    </div>
    
<!-- Transparent bar with links -->
<div class="footer-bar">
    <a href="Terms_Of_Privacy_Policy.html" class="footer-link">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>      
 
<div id="site-usage-rating" style="position: fixed; width: 80px; height: 80px; bottom: 40px; right: 40px; color: black; border-radius: 50px; text-align: center; z-index: 9999; font-size: 13px; padding: 6px; font-family: monospace; line-height: 15px; overflow-wrap: normal; background-color: green; opacity: 0;">Site Malicious Rate<br><b>0.0</b></div></body></html>    


<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    const removeFromCartButtons = document.querySelectorAll(".remove-from-cart");
    const cart = document.getElementById("cart");
    const totalAmountElement = document.getElementById("total-amount");

    // Initialize the variables to capture the data
    let user_id = 3; // Replace with the actual user ID
    let item_No = 1; // Replace with the actual item number
    let cart_id = 04; // Replace with the actual cart ID
    let price = 10.56; // Initialize price
    let total = 45; // Initialize total
    let title = "Product Title"; // Replace with the actual title

    addToCartButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        const product = this.parentElement;
        const productName = product.querySelector("h6").textContent;
        price = parseFloat(product.querySelector("p").textContent.slice(1)); // Remove the '$' and parse as float
        addToCart(productName, price);
    });
    });

    removeFromCartButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        const product = this.parentElement;
        const productName = product.querySelector("h6").textContent;
        removeFromCart(productName);
      });
    });

    let totalAmount = 0;

    function addToCart(name, productPrice) {
      const cartItem = document.createElement("div");
      cartItem.textContent = name + " - $" + productPrice.toFixed(2);
      cart.appendChild(cartItem);
      totalAmount += productPrice;
      updateTotalAmount();
    }

    function removeFromCart(name) {
      const cartItems = cart.querySelectorAll("div");
      cartItems.forEach(function (cartItem) {
        if (cartItem.textContent.includes(name)) {
          cart.removeChild(cartItem);
          totalAmount -= parseFloat(cartItem.textContent.split(" - $")[1]);
          updateTotalAmount();
        }
      });
    }

    function updateTotalAmount() {
      totalAmountElement.textContent = "Total Amount: $" + totalAmount.toFixed(2);
    }

    // Define buyButton outside of the event handler
    const buyButton = document.querySelector('.buy-button');

    // Add the code for sending cart data to the server when the "Buy now" button is clicked
    buyButton.addEventListener("click", function () {
      const cartItems = cart.querySelectorAll("div");
      const cartItemDetails = [];

      cartItems.forEach(function (cartItem) {
        cartItemDetails.push(cartItem.textContent);
      });

      // Update the price and total
      price = totalAmount;
      total = totalAmount;

      const formData = new FormData();
      formData.append('user_id', user_id);
      formData.append('item_No', item_No);
      formData.append('cart_id', cart_id);
      formData.append('price', price);
      formData.append('total', total);
      formData.append('title', title);
      formData.append('cart_items', JSON.stringify(cartItemDetails));

      // Send an AJAX request to the server
      fetch("test2.php", {
        method: "POST",
        body: formData
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.text();
        })
        .then(data => {
          // Handle the response as needed
          console.log(data);
        })
        .catch(error => {
          console.error("Fetch error:", error);
        });
    });
  });
</script> -->

<!-- <script>
$(document).ready(function () {
    // Add to Cart Button Click Event
    $('.add-to-cart').on('click', function () {
        var itemID = $(this).data('item-id');

        // Send an AJAX request to add the item to the cart
        $.ajax({
            type: "POST",
            url: "addtocart.php", // Replace with your PHP script URL
            data: { item_id: itemID },
            success: function (response) {
                // Handle the response here (e.g., show a success message)
                alert("Product added to cart!");
            }
        });
    });

    // Remove from Cart Button Click Event
    $('.remove-from-cart').on('click', function () {
        var itemID = $(this).data('item-id');

        // Send an AJAX request to remove the item from the cart
        $.ajax({
            type: "POST",
            url: "removefromcart.php", // Replace with your PHP script URL
            data: { item_id: itemID },
            success: function (response) {
                // Handle the response here (e.g., show a success message)
                alert("Product removed from cart!");
            }
        });
    });
});
</script> -->

<script>
$(document).ready(function () {
    // Function to update the cart section
    function updateCartSection() {
        $.ajax({
            type: "GET",
            url: "getcartitems.php",
            success: function (response) {
                // Update the cart section with the fetched data
                var cartSection = $('.cart-section');
                cartSection.empty();

                if (response.items.length > 0) {
                    $.each(response.items, function (index, item) {
                        cartSection.append('<div class="cart-item"><h4>' + item.Title + '</h4><p>Price: $' + item.Price + '</p></div>');
                    });

                    cartSection.append('<div class="total-price"><p>Total Price: $' + response.total_price + '</p></div>');
                } else {
                    cartSection.append('<p>Your cart is empty.</p>');
                }
            }
        });
    }

    // Initial update
    updateCartSection();

    // Periodically update the cart section (e.g., every 10 seconds)
    setInterval(updateCartSection, 10000);

    // Add to Cart Button Click Event
    $('.add-to-cart').on('click', function () {
        var itemID = $(this).data('item-id');

        // Send an AJAX request to add the item to the cart
        $.ajax({
            type: "POST",
            url: "addtocart.php", // Replace with your PHP script URL
            data: { item_id: itemID },
            success: function (response) {
                // Handle the response here (e.g., show a success message)
                // alert("Product added to cart!");
                // Update the cart section after adding a product
                updateCartSection();
            }
        });
    });

    // Remove from Cart Button Click Event
    $('.remove-from-cart').on('click', function () {
        var itemID = $(this).data('item-id');

        // Send an AJAX request to remove the item from the cart
        $.ajax({
            type: "POST",
            url: "removefromcart.php", // Replace with your PHP script URL
            data: { item_id: itemID },
            success: function (response) {
                // Handle the response here (e.g., show a success message)
               alert("Product removed from cart!");
                 //Update the cart section after removing a product
                updateCartSection();
            }
        });
    });
});
</script>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="Assests/icon1.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-ABCDEF1234567890" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
           function validate() {  
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var text = document.getElementById("text").value;
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (name == "" || email == "" || text == "") {
                alert("Please Fill All fields Correctly");
                return false;
            } 
            if (!email.match(emailRegex)) {
                alert("Please enter a valid email address");
                return false;
            }
            alert("Rigisterd Successfully! ")
            console.log(name,email,text);
            return true;
        }
        </script>
</head>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // Database connection (adjust the credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
      
    // Insert data into the database
    $sql = "INSERT INTO feedback (Name, Email,Subject,message) VALUES ('$name', '$email','$subject','$message')";

    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Feedback is Submitted !");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<body>
    <!-- Header Section -->
    <section class="header">
        <a href="#"><img src="Assests/logo.png" alt=""></a>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="Shop.php">Shop</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="AddtoCart.php"><img class="cart" src="Assests/shopping-cart-set-of-shoppin-cart-icon-on-white-background-shopping-cart-icon-shopping-cart-design-shopping-cart-icon-sign-shopping-cart-icon-isolated-shopping-cart-symbol-free-vector-removebg-previe.png" alt=""></a></li>

                <?php
            $isLoggedIn = true;
            if ($isLoggedIn) {
                echo '<img class="profile"
                src="Assests/userprofile.png"
                alt=""
                style="width: 40px; height: 40px; margin:10px ; cursor: pointer;">';
            } else {
                echo '<button><a href="Authantication/Login.php">Login</a></button>';
            }
        ?>
        </ul>
    </section>
    <!-- Hero Section -->
    <section class="page-background background2 ">
        <h2>#let's Talk</h2>
        <p>Leave a Message for let us know about your Feedback</p>
    </section>

    <section class="contact-details section-p1">
        <div class="details">
          <span>GET IN TOUCH</span>
          <h2>Visit one of our agency locations or contact us today</h2>
          <h3>or contact us today</h3>
          <div>
            <li>
              <i class="fal fa-map"></i>
              <p>S6 Glassford Street Glasgow FI !UL New York</p>
            </li>
            <li>
              <i class="fal fa-envelope"></i>
              <p>contact@example.com</p>
            </li>
            <li>
              <i class="fal fa-phone-alt"></i>
              <p>contact@example.com</p>
            </li>
            <li>
              <i class="fal fa-clock"></i>
              <p>Monday to Saturday: 9.00am to 16.pm</p>
            </li>
          </div>
        </div>
  
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.808802952279!2d-1.2569417240422602!3d51.75481969259943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sin!4v1684573854503!5m2!1sen!2sin"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        </section>  
        <section class="form-details">
            <form action="Contact.php" method="POST" onsubmit="return validate();">
              <span>LEAVE A MESSAGE</span>
              <h2>We love to hear from you</h2>
              <input type="text" id="name" name="name" placeholder="Your Name" />
              <input type="email"id="email" name="email" placeholder=" Enter Your email" />
              <input type="text" name="subject" placeholder="Subject (optional)" />
              <textarea id="text" name="message" cols="30" rows="10"> </textarea>
              <button class="normal">Submit</button>
            </form>
            <div class="people">
              <div>
                <img src="Assests/people/1.png" alt="" />
                <p>
                  <span>John Due</span> Senior Marketing Manger <br />
                  Phone:+00 123456789 <br />
                  Email: contact@gmail.com
                </p>
              </div>
              <div>
                <img src="Assests/people/2.png" alt="" />
                <p>
                  <span>William Smith </span> Senior Marketing Manger <br />
                  Phone:+00 123456789 <br />
                  Email: contact@gmail.com
                </p>
              </div>
              <div>
                <img src="Assests/people/3.png" alt="" />
                <p>
                  <span>Emma Stone</span> Senior Marketing Manger <br />
                  Phone:+00 123456789 <br />
                  Email: contact@gmail.com
                </p>
              </div>
            </div>
          </section>

    <section class=" newsletter section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>
                Get E-mail updates about our latest shop and
                <span> Special Offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address" />
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img src="Assests/logo.png" alt="" />
            <h4>Contact</h4>
            <p>
                <strong>Addres:</strong> 562 Wellington Road, Street 32, San Francisco
            </p>

            <p><strong>Addres:</strong> +01 2222 365 /(+91) 01 2345 6789</p>

            <p><strong>Hours:</strong> 10:00 - 18:00, Mon -Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart </a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Paly</p>
            <div class="row">
                <img src="Assests/pay/app.jpg" alt="" />

                <img src="Assests/pay/play.jpg" alt="" />
            </div>
            <p>Secured Payment Geteways</p>
            <img src="Assests/pay/pay.png" alt="" />
        </div>

        <div class="copyright">
            <p>2023 copyrights Reserved</p>
        </div>
    </footer>
</body>

</html>
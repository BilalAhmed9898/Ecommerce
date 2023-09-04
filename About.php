<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

    <section id="page-header" class="page-background About-header">
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </section>
    <section class="About-head section-p1">
     <img src="Assests/about/a6.jpg" alt="" />

    <div class="aboutdata">
        <h2>Who we are?</h2>
        <p>
            At shophub, we are more than just a group of individuals we are a
            passionate and dedicated team driven by a common purpose: to make a
            positive impact on the world. Established with a vision to, we continuously
            strive to create meaningful solutions that empower individuals,
            businesses, and communities alike.
        </p>
        <abbr title="" class="abbr">
            Join us on our journey as we pave the way for a brighter tomorrow.
            Whether you're a potential customer, partner, or team member, we
            invite you to explore the possibilities of working together and making
            a difference.
        </abbr>
        <br /><br />

        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">
            "Your One-Stop Shop for Everything You Love!"</marquee>
    </div>
</section>
    <!-- <section class="Aboutapp">
    <h1>Download Our <a href="#">App</a></h1>
    <div class="video">
        <video autoPlay muted loop src="Assests/about/appvideo.mp4"></video>
    </div>
</section> -->
   <section class="services">
        <div class="box"><img src="Assests/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="box"><img src="Assests/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="box"><img src="Assests/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="box"><img src="Assests/features/f4.png" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="box"><img src="Assests/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="box"><img src="Assests/features/f6.png" alt="">
            <h6>24/7 Support</h6>
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
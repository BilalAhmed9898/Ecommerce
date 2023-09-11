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
</head>


<body>
<?php
     session_start(); // Start the session
     if (isset($_SESSION['user_email'])) {
         $isLoggedIn = true;
         $userEmail = $_SESSION['user_email']; // You can access user data here if needed
     } else {
         $isLoggedIn = false;
     }
    ?>
    <!-- Header Section -->
    <section class="header">
        <a href="#"><img src="Assests/logo.png" alt=""></a>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="Shop.php">Shop</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="AddtoCart.php"><img class="cart" src="Assests/Cart.png" alt=""></a></li>
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
    <section class="page-background">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>

    <section class=" product1 section-p1">
        <div class="pro-contanier">
            <div class="pro">
                <img src="Assests/products/f1.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f2.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f3.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f4.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f5.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f6.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f7.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/f8.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
            </div>


            <div class="pro">
                <img src="Assests/products/n1.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n2.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n3.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n4.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n5.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n6.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n7.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="Assests/products/n8.jpg" alt="">
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>Carton T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$ 114</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
        </div>
    </section>
    <section class="pagination section-p1 ">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
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
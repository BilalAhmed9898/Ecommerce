<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommere App</title>
    <link rel="icon" href="Assests/icon1.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-ABCDEF1234567890" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <script>
    async function fetchAndRenderProducts() {
        try {
            const response = await fetch('https://fakestoreapi.com/products?limit=20');
            const products = await response.json();
            if (!products) {
            }
            const productsContainer = document.getElementById('products-container');

            // Map each product and create the corresponding HTML elements
            const productHTML = products.map((product) => `
        <div class="pro">
            <a href="sproduct.php?id=${product.id}">
                <img src="${product.image}" alt="${product.title}" >
                <div class="discirption">
                    <span>Idedas</span>
                    <h5>${product.title}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                <h4>$${product.price.toFixed(2)}</h4>
                </div>
                </a>
            <a href="sproduct.php?id=${product.id}"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        `).join('');

            // Set the HTML of the container to display the products

            productsContainer.innerHTML = productHTML;
        } catch (error) {
            document.getElementById('Error').innerHTML = "Can't Fatch Products";
            console.error('Error fetching products:', error);
        }
    }

    fetchAndRenderProducts();
   

   
</script>
<?php
       include('Authantication/dbconnect.php');
        session_start(); // Start the session
        if (isset($_SESSION['user_email'])) {
            $isLoggedIn = true;
            $userEmail = $_SESSION['user_email']; // You can access user data here if needed
        } else {
            $isLoggedIn = false;
        }

        $email = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                // Handle the case where email is invalid
                echo '<script>alert("Invalid email address. Please provide a valid email address.")</script>';
            }
        }

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require 'phpmailer/phpmailer/src/Exception.php';
        require 'phpmailer/phpmailer/src/PHPMailer.php';
        require 'phpmailer/phpmailer/src/SMTP.php';

        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = 'zaheerbilal440@gmail.com'; // SMTP username
            $mail->Password   = 'borpzqlhuhevjwcu'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable implicit TLS encryption
            $mail->Port       = 587; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Recipients
            $mail->setFrom('zaheerbilal440@gmail.com', 'Customer');
            
            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mail->addAddress($email); // Add a recipient
            } 
            

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Customer Care Message.';
            $mail->Body    = 'Dear Valued Customer
            We are thrilled to have you as part of our family! Stay tuned for exciting future deals that promise even more savings and incredible products. We can not wait to bring you more fantastic shopping experiences.  
            Best regards,
            CARA Ecommerce';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<script>alert("Welcome to CARA, Your Shopping Destination!")</script>';
        } catch (Exception $e) {
            echo "";
        }   
?>

<body>
    <!-- Header Section -->
    <section class="header">
        <a href="#"><img src="Assests/logo.png" alt=""></a>
        <ul id="navbar">
            <i id="close" class="fa-solid fa-times"></i>
            <li><a href="index.php">Home</a></li>
            <li><a href="Shop.php">Shop</a></li>
            <li><a href="About.php">About</a></li >
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="AddtoCart.php"><img class="cart" src="Assests/Cart.png" alt=""></a></li>
           <li><?php
            if ($isLoggedIn) {
                // User is logged in, access the email session and show the icon
                echo '<a href="Profile.php"><img class="profile"
                    src="Assests/userprofile.png"
                    alt=""
                    style="width: 40px; height: 40px; margin: 10px; cursor: pointer;"></a>';
            } else {
                // User is not logged in, display a login button
                echo '<div id="login-button"><button><a href="Authantication/Login.php">Login</a></button></div>';
            }
            ?></li>
        </ul>
        <div id="mobile">
        <a href="AddtoCart.php"><i class="fas fa-shopping-bag"></i></a>
        <i id="bar" class="fa-solid fa-bars"></i>
      </div>
    </section>
    
    <!-- Hero Section -->
    <section class="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On All Products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now !</button>
    </section>
    <!-- Services  -->
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
    <section class=" product1 section-p1">
        <h2 id="Error">Featured Products</h2>
        <p id="Error">Summer Colection New Modern Design</p>

        <!-- Container For fatched products -->
        <div class="pro-contanier" id="products-container">
        </div>

    </section>
    <!-- banner -->
    <section class="section-p1 banner">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> - All t-shirts and accessories</h2>
        <Button class="">Explore More !</Button>
    </section>
    <!-- New Arrival -->
    <section class=" product1 section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New modern Design</p>
        <div class="pro-contanier">
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
    <section class="sm-banner section-p1">
        <div class="banner-box1">
            <h4>Creazy Deals</h4>
            <h2>Buy 1 get 1 free !</h2>
            <span>The best classic dress is on sale at cara</span>
            <button>Learn More!</button>
        </div>
        <div class="banner-box1 banner-box2">
            <h4>Creazy Deals</h4>
            <h2>Buy 1 get 1 free !</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More!</button>
        </div>
    </section>
    <section class="banner3">
        <div class="bannerbox1">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% Off!</h3>
        </div>
        <div class="bannerbox1 banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% Off!</h3>
        </div>
        <div class="bannerbox1 banner-box3 ">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% Off!</h3>
        </div>
    </section>
    <section class="newsletter section-p1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>
                Get E-mail updates about our latest shop and
                <span> Special Offers.</span>
            </p>
        </div>
        <form action="index.php" method="POST" class="form">
            <input type="text" name="email" placeholder="Your Email address" />
            <button class="normal" type="submit">Sign Up</button>
        </form>
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
    <script>
         const bar = document.getElementById('bar'); // Changed getElementsById to getElementById
            const close = document.getElementById('close'); // Changed getElementsById to getElementById
            const nav = document.getElementById('navbar'); // Changed getElementsById to getElementById

            if (bar) {
                bar.addEventListener('click', () => {
                    nav.classList.add('active');
                });
               
            }

            if (close) {
                close.addEventListener('click', () => { // Changed bar.addEventListener to close.addEventListener
                    nav.classList.remove('active');
                });
            }
    </script>
</body>

</html>
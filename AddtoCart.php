<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-ABCDEF1234567890" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var subtotalValue = document.getElementsByClassName('subtotalValue');
    var grandTotalCells = document.querySelectorAll('.GrandTotal'); // Select all elements with class GrandTotal

    function calculateSubtotal(index) {
        var price = parseFloat(iprice[index].value);
        var quantity = parseInt(iquantity[index].value);
        var subtotal = price * quantity;

        subtotalValue[index].innerText = subtotal.toFixed(2);

        updateGrandTotal();
    }

    function updateGrandTotal() {
        var grandTotal = 0;
        for (var i = 0; i < subtotalValue.length; i++) {
            grandTotal += parseFloat(subtotalValue[i].innerText);
        }
        // Update both elements with class GrandTotal
        for (var j = 0; j < grandTotalCells.length; j++) {
            grandTotalCells[j].innerText = grandTotal.toFixed(2);
        }
    }

    // Loop through each quantity input field and attach the onchange event listener
    for (var i = 0; i < iquantity.length; i++) {
        iquantity[i].onchange = function () {
            // Get the index of the row associated with this input field
            var index = Array.from(iquantity).indexOf(this);
            calculateSubtotal(index);
        };
        // Calculate subtotals for each row on page load
        calculateSubtotal(i);
    }
});

    </script>


</head>
<?php
        // Start the session if it's not already started
        session_start();
        if (isset($_SESSION['user_email'])) {
            $isLoggedIn = true;
            $userEmail = $_SESSION['user_email']; // You can access user data here if needed
        } else {
            $isLoggedIn = false;
        }
        // session_destroy();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product_id = $_POST['product_id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $image = $_POST['image'];
        
            if(isset($_POST['AddtoCart'])){

            if(isset($_SESSION['cart'])){

                $myproducts= array_column($_SESSION['cart'],'product_id');
                
                    if (in_array($product_id, $myproducts)) {

                        foreach ($_SESSION['cart'] as &$item) {

                            // $total=$total+$item['price'];

                                    if ($item['product_id'] == $product_id) {
                                        echo "<script>alert('Item is already added');
                                        window.location.href='index.php';
                                        </script>";
                                    }};
                    }

                $count=count($_SESSION['cart']);

                $_SESSION['cart'][$count]=array('product_id'=> $product_id,'title'=> $title,'price'=>  $price,'quantity'=> $quantity,'Image'=> $image);
               
            }
            else{
                $_SESSION['cart'][0]=array('product_id'=> $product_id,'title'=> $title,'price'=>  $price,'quantity'=> $quantity,'Image'=> $image);
                echo "<script>alert('Item is added');
                </script>";
                    
            }
        }
        

        
        }
?>

<body>
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

<section id="page-header" class="page-background Cart-header">
                <h2>#let's Talk</h2>
                <p>Leave a Message for let us know about your Feedback</p>
            </section>

            <section id="cart" class="section-p1">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Image</td>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Remove</td>
                            <td>Subtotal</td>
                        </tr>
                    </thead>
                    <tbody>
                                <?php
            if (empty($_SESSION['cart'])) {
                // Display a message when the cart is empty
                echo '<h3>Your cart is empty.</h3>';
            } else {
                // Loop through cart items and display them
                $total=0;
                foreach ($_SESSION['cart'] as $item) {
                    $titleWords = explode(' ', $item['title']); // Split the title into words
                    // Get the first three words of the title
                    $shortTitle = implode(' ', array_slice($titleWords, 0, 3));
                    ?>
                    <tr>
                        <td><img src="<?php echo $item['Image']; ?>" alt="<?php echo $item['title']; ?>" width="100"></td>
                        <td><?php echo $shortTitle; ?></td>
                        <td><?php echo $item['price']; ?><input type="hidden" class="iprice" value="<?php echo $item['price']; ?>"></td>
                        <td>
                        <input type="number" class="iquantity" onchange="calculateSubtotal(<?php echo $index; ?>)" value="<?php echo $item['quantity']; ?>">
                        </td>
                        <td>
                            <form action="ManageCart.php" method="POST">
                                <button type="submit" name="Remove_Item" style="font-size:35px; color:red; background:none; border:none; cursor:pointer;">
                                    <?php $product_id = $item['product_id']; ?>
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </form></td> 
                            <td class="subtotalValue"></td>

                    </tr>
                <?php } 
            } // End if/else
            ?>
   
                    </tbody>
                </table>
            </section>
            
    <section id="cart-add" class="section-p1">
      <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
          <input type="text" placeholder="Enter your coupon" />
          <button class="normal">Apply</button>
        </div>
      </div>

      <div id="subtotal">
        <h3>Cart totals</h3>
        <table>
          <tr>
            <td>Cart Subtotal</td>
            <td class="GrandTotal"></td>
          </tr>

          <tr>
            <td>Shipping</td>
            <td>Free</td>
          </tr>

          <tr>
            <td><strong>Total</strong></td>
            <td class="GrandTotal"></td>
          </tr>
        </table>
        <button class="normal">Proceed to Checkout</button>
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
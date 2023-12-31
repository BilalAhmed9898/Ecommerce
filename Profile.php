<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();

include('Authantication/dbconnect.php');

// Check if the user is logged in (user_email session variable is set)
if (isset($_SESSION['user_email'])) {
    $isLoggedIn = true;
    $userEmail = $_SESSION['user_email'];

    // Fetch user data based on the email stored in the session
    $sql = "SELECT * FROM customers WHERE email = '$userEmail'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the user's data as an associative array
        $userData = mysqli_fetch_assoc($result);
        echo($userData);
        // You can access specific fields like this:
        $user_name = $userData['name'];
        $user_email = $userData['email'];
        // ... and so on for other fields
        // Close the database connection
        mysqli_close($conn);
    } else {
        // Handle the case where the user's data couldn't be retrieved
        // You may want to display an error message here
    }
} else {
    $isLoggedIn = false;
}

if (isset($_POST['logout'])) {
    // Destroy the user's session and redirect to index.php
    session_destroy();
    echo '<script>alert("Logout successful");</script>';
    header("Location: index.php");
    exit();
}
?>
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

              <div class="Profile section-p1">
            <div class="intro">
                <img src="Assests/ProfilePicture.jpg" alt="" />
            </div>
            <div class="discrip">
                <div class='col1'>
                    <p>Name : </p>
                    <p><?php echo $user_name; ?></p>
                </div>
                <div class='col1'>
                    <p>Email : </p>
                    <p>zaheerbilal440@gmail.com</p>
                </div>
               
                <div class='col1'>
                    <p>Phone : </p>
                    <p>0300-282428720</p>
                </div>
                <div class='col1'>
                    <p>CNIC : </p>
                    <p>43423-323232332-1</p>
                </div>
                <div class='col1'>
                    <p>Balance  : </p>
                    <p>$ 45.34</p>
                </div>
                <form method="post">
                      <div class="col1">
                          <button type="submit" name="logout">Logout</button>
                      </div>
                  </form>
                
            </div>
        </div>
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
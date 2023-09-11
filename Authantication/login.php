<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validate() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            
            if (email == "" || password == "") {
                alert("Please Fill Both fields Correctly");
                return false;
            }
            if (!email.match(emailRegex)) {
                alert("Please enter a valid email address");
                return false;
            }
            if(password.length < 6 || password.length >8){
                alert("Password must be between 6 to 8 characters long");
                return false;
            }
        
            return true;
            alert("data safe")
        }

    </script>
</head>
<?php
        session_start();
        include('dbconnect.php');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $_SESSION['user_email'] = $email; 
                header("Location: ../index.php");
                exit();
            } else {
                // Invalid login, display an alert and use JavaScript to redirect
                echo "<script>alert('Invalid email or password. Please try again. Thank You ');";
                echo "window.location.href = 'Login.php';</script>";
                exit();
            }
        }

        $conn->close();
?>
<body>
    

    <div class="container container1">
        <form action="login.php" method="POST" onsubmit="return validate();">
            <input type="checkbox" id="check">
            <div class="login form">
                <header>Login</header>
                    <input type="text" id="email" name="email" placeholder="Enter your email">
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                    <a href="#">Forgot password?</a>
                    <input type="submit" class="button" value="Login">
                </form>
                <div class="signup">
                    <span class="signup">Don't have an account?
                        <label for="check"><a href="Signup.php">SignUp</a></label> <br>
                    </span>
                </div>
            </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validate() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var cnic = document.getElementById("cnic").value;
            var address = document.getElementById("address").value;
            var regularexpression = /^[0-9]{5}-[0-9]{7}-[0-9]/;
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            
            if (name == "" || email == "" || password == "" || cnic == "" || address == "" ) {
                alert("Please Fill All fields Correctly");
                return false;
            }
            if (name.length < 6 || name.length > 15) {
                alert("Please Give Name 6 to 10 Characters");
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
            if (regularexpression.test(cnic)) {
                return true;
            }
            else {
                alert("Please give proper CNIC Format like #####-#######-#");
                return false;
            }
            if (address.length < 15 || name.length > 40) {
                alert("Please Give Address Between 15 to 40 Characters");
                return false;
            }
            alert("Rigisterd Successfully! ")
            return true;
        }

    </script>
</head>
<?php


include('dbconnect.php');

// Check if the form is submitted

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $passwordHash = $_POST['password'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];

        // Check if the email already exists
        $emailCheckQuery = "SELECT COUNT(*) as count FROM customers WHERE Email = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);
        
        if ($emailCheckResult) {
            $row = mysqli_fetch_assoc($emailCheckResult);
            $emailCount = $row['count'];
            
            if ($emailCount > 0) {
                echo '<script>alert("Email already exists. Please use a different email.");</script>';
                echo '<script>window.location.href = "Signup.php";</script>';
                exit();
            } else {
                // Email doesn't exist, proceed with the insertion
                $query = "INSERT INTO customers (Name, Email, Number, Password, Cnic, Address) VALUES ('$name', '$email', '$phoneNumber', '".$_POST['password']."', '$cnic', '$address')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    // Data sent successfully
                    echo '<script>alert("Data sent successfully!");</script>';
                    echo '<script>window.location.href = "login.php";</script>';
                    exit();
                } else {
                    // Error occurred while inserting data
                    echo "<p>Error occurred while signing up. Please try again.</p>";
                }
            }
        } else {
            // Error occurred while checking email existence
            echo "<p>Error occurred while checking email existence. Please try again.</p>";
        }
    }

?>


<body>

    <div class="container">
        <form action="Signup.php" method="POST" onsubmit="return validate();">
            <input type="checkbox" id="check">
            <div class="login form">
                <header>SignUp</header>
                <!-- <form> -->
                    <input type="text" id="name" name="name" placeholder="Enter your Name">
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                    <input type="text" id="cnic" name="cnic" placeholder="CNIC" maxlength="15">
                    <input type="text" id="address" name="address" placeholder="Enter your Address">
                    <a href="#">Forgot password?</a>
                    <input type="submit" class="button" value="SignUp">
                <!-- </form> -->
                <div class="signup">
                    <span class="signup">Already have an account?
                        <label for="check"><a href="Login.html">Login</a></label> <br>
                        <label for="check"><a href="Admin.html">Admin Login</a></label>
                    </span>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
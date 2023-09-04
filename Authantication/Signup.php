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
                    echo '<script>window.location.href = "Signup.html";</script>';
                    exit();
                } else {
                    // Email doesn't exist, proceed with the insertion
                    $query = "INSERT INTO customers (Name, Email, Number, Password, Cnic, Address) VALUES ('$name', '$email', '$phoneNumber', '".$_POST['password']."', '$cnic', '$address')";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        // Data sent successfully
                        echo '<script>alert("Data sent successfully!");</script>';
                        echo '<script>window.location.href = "login.html";</script>';
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

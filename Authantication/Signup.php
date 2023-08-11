<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['number'];
    $passwordHash = $_POST['password'];
    $cnic = $_POST['cnic'];    
    $address = $_POST['address'];

    extract($_POST);
    
     echo "$name<br>";
     echo "$email<br>";
     echo "$phoneNumber<br>";
     echo "$passwordHash<br>";
     echo "$cnic<br>";
     echo "$address<br>";

        // Database connection
     $host = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'registration';
        $conn = mysqli_connect($host, $username, $password, $database);

        // Check if the connection was successful
        if (!$conn) {
            die('Failed to connect to the database: ' . mysqli_connect_error());
        } else {
            echo 'Connected to the database!';
            echo "<br>";
           echo $query = "INSERT INTO customers (Name, Email, Number, Password, Cnic, Address) VALUES ('$name', '$email', '$phoneNumber', '".$_POST['password']."', '$cnic', '$address')";
           echo "<br>";
            $result = mysqli_query($conn, $query);
            
            if ($result) {
                // Data inserted successfully
                echo "<p>SuccessFully Submitted Data </p>";
            } else {
                // Error occurred while inserting data
                echo "<p>Error occurred while signing up. Please try again.</p>";
            }
        }
        

//         $conn = mysqli_connect($host, $username, $password, $database);

//         if (!$conn) {
//             echo "Can not Connect with databae";
//             die('Failed to connect to the database: ' . mysqli_connect_error());
//         }

//         // Prepare and execute the query
//         $query = "INSERT INTO customers (Name,Email,Number,Password,Cnic,Address) VALUES ('$name','$email','$number','$password','$cnic','$address', '$password')";
//         $result = mysqli_query($conn, $query);
//         // echo var_dump($conn);
//         if ($result) {
//             // Redirect to the login page after successful signup
//             header("Location: login.php");
//             exit();
//         } else {
//             // Error occurred while inserting data, display an error message
//             echo "<p>Error occurred while signing up. Please try again.</p>";
//         }

//         // Close the database connection
//         mysqli_close($conn);
    
 }
?>
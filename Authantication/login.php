<?php
include('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: ../index.php");
        exit();
    } else {
        // Invalid login, display an alert and use JavaScript to redirect
        echo "<script>alert('Invalid email or password. Please try again. Thank You ');";
        echo "window.location.href = 'login.html';</script>";
    }
}

$conn->close();
?>

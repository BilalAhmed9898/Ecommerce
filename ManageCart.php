<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Remove_Item'])){
  
        $product_id = $_POST['product_id']; // Retrieve the product_id from the form
        echo($product_id);
        foreach($_SESSION['cart'] as $key => $value){
            if($value['product_id'] == $product_id){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
        }
        header("Location: AddtoCart.php");
        exit;
    }
}
?>

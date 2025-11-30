<?php 
    include './function_list.php';

    $product = $_POST['product'];

    if (addProduct($product))
    {
        header('location: ../products.php');
    }
    else{
        echo "Failed to add product.";
    }
?>
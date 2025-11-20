<?php 
    include './function_list.php';

    $id = $_GET['id'];

    if (deleteProduct($id))
    {
        header('location: ../products.php');
    }
    else{
        echo "Failed to delete product.";
    }
?>
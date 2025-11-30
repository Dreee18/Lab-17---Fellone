<?php 
    include './function_list.php';

    $id = $_POST['id'];
    $product = $_POST['product'];


    if (editProdutct($id, $product))
    {
        header('location: ../products.php');
    }
    else{
        echo "Failed to update product.";
    }
?>
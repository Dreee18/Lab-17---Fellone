<?php 
    include './function_list.php';

    $id = $_GET['id'];

    if (deleteCustomer($id))
    {
        header('location: ../customers.php');
    }
    else{
        echo "Failed to delete product.";
    }
?>
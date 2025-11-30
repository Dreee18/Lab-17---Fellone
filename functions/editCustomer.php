<?php 
    include './function_list.php';

    $id = $_POST['id'];
    $customer = $_POST['customer'];


    if (editCustomer($id, $customer))
    {
        header('location: ../customers.php');
    }
    else{
        echo "Failed to update customer.";
    }
?>
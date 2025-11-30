<?php 
    include './function_list.php';

    $customer = $_POST['customer'];

    if (addCustomer($customer))
    {
        header('location: ../customers.php');
    }
    else{
        echo "Failed to add customer.";
    }
?>
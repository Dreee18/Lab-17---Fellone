<?php 
    include './function_list.php';

    $id = $_GET['id'];

    if (deleteVendor($id))
    {
        header('location: ../vendors.php');
    }
    else{
        echo "Failed to delete vendor.";
    }
?>
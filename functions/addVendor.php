<?php 
    include './function_list.php';

    $vendor = $_POST['vendor'];

    if (addVendor($vendor))
    {
        header('location: ../vendors.php');
    }
    else{
        echo "Failed to add vendor.";
    }
?>
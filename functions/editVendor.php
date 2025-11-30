<?php 
    include './function_list.php';

    $id = $_POST['id'];
    $vendor = $_POST['vendor'];


    if (editVendor($id, $vendor))
    {
        header('location: ../vendors.php');
    }
    else{
        echo "Failed to update vendor.";
    }
?>
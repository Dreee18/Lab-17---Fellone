<?php

    include 'connectdb.php';

    function getAllProducts() {
        $conn = Connect();
        $query = 'SELECT * FROM  product';
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }
    
    function getAllInvoice() {
        $conn = Connect();
        $query = 'SELECT * FROM  `invoice` 
        INNER JOIN `customer` 
        ON `invoice`.cus_code = `customer`.cus_code';
        
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }

    function getAllVendors() {
        $conn = Connect();
        $query = 'SELECT * FROM  `vendor`';
        
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }

    
    function numberFormatting($value){
        return '$'.number_format($value, 2);
    }

    function deleteProduct($id) {
        $conn = Connect();
        
        $query = "DELETE FROM `line` WHERE `p_code` = '$id'";
        $conn->query($query);

        $query = "DELETE FROM `product` WHERE `p_code` = '$id'";
        $result = $conn->query($query);

        return $result;
    }
?>
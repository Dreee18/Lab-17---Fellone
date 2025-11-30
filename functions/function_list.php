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

    function addProduct($product) {
        $conn = Connect();

        $date_tdy = date('Y-m-d h:i:s');

        $query = "INSERT INTO `product` 
        (p_code, 
        p_descript, 
        p_indate, 
        p_qoh, 
        p_price, 
        p_discount, 
        v_code)
        
        VALUES (
        '$product[code]', 
        '{$product['description']}', 
        '{$date_tdy}', 
        '{$product['stocks']}', 
        '{$product['price']}', 
        '{$product['discount']}', 
        '{$product['vendor']}')";

        $result = $conn->query($query);

        return $result;
    }

    function editProdutct($id, $product) {
        $conn = Connect();
        
        $query = "UPDATE `product` 
        SET `p_code` = '{$product['code']}', 
        `p_descript` = '{$product['description']}', 
        `p_qoh` = '{$product['stocks']}', 
        `p_price` = '{$product['price']}', 
        `p_discount` = '{$product['discount']}',
        `v_code` = '{$product['vendor']}'
        WHERE `p_code` = '$id'";

        $result = $conn->query($query);

        return $result;
    }

    function deleteProduct($id) {
        $conn = Connect();
        
        $query = "DELETE FROM `line` WHERE `p_code` = '$id'";
        $conn->query($query);

        $query = "DELETE FROM `product` WHERE `p_code` = '$id'";
        $result = $conn->query($query);

        return $result;
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

    function addVendor($vendor) {
        $conn = Connect();

        $query = 'SELECT * FROM  `vendor`';
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        $last_v_code = end($data)['v_code'];
        $new_v_code = $last_v_code + 1;

        $query = "INSERT INTO `vendor` 
        (v_code, 
        v_name, 
        v_contact, 
        v_areacode, 
        v_phone, 
        v_state, 
        v_order)
        
        VALUES (
        '$new_v_code', 
        '{$vendor['name']}', 
        '{$vendor['contact']}', 
        '{$vendor['areacode']}', 
        '{$vendor['phone']}', 
        '{$vendor['state']}', 
        '{$vendor['order']}')";

        $result = $conn->query($query);

        return $result;
    }

    function editVendor($id, $vendor) {
        $conn = Connect();
        
        $query = "UPDATE `vendor` 
        SET `v_name` = '{$vendor['name']}', 
        `v_contact` = '{$vendor['contact']}', 
        `v_areacode` = '{$vendor['areacode']}', 
        `v_phone` = '{$vendor['phone']}', 
        `v_state` = '{$vendor['state']}', 
        `v_order` = '{$vendor['order']}'
        WHERE `v_code` = '$id'";

        $result = $conn->query($query);

        return $result;
    }

    function deleteVendor($id) {
        $conn = Connect();
        
        $query = "UPDATE `product`
        SET `v_code` = NULL
        WHERE v_code = '$id'";
        $conn->query($query);

        $query = "DELETE FROM `vendor` WHERE `v_code` = '$id'";
        $result = $conn->query($query);

        return $result;
    }

    function getAllCustomers() {
        $conn = Connect();
        $query = 'SELECT * FROM  `customer`';
        
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }

    function addCustomer($customer) {
        $conn = Connect();

        $query = 'SELECT * FROM  `customer`';
        $result = $conn->query($query);

        $data = [];
        
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        $last_cus_code = end($data)['cus_code'];
        $new_cus_code = $last_cus_code + 1;

        $query = "INSERT INTO `customer` 
        (cus_code, 
        cus_lname, 
        cus_fname, 
        cus_initial, 
        cus_areacode, 
        cus_phone, 
        cus_balance)
        
        VALUES (
        '$new_cus_code', 
        '{$customer['lname']}', 
        '{$customer['fname']}', 
        '{$customer['initial']}', 
        '{$customer['areacode']}', 
        '{$customer['phone']}', 
        '{$customer['balance']}')";

        $result = $conn->query($query);

        return $result;
    }

    function editCustomer($id, $customer) {
        $conn = Connect();
        
        $query = "UPDATE `customer` 
        SET `cus_lname` = '{$customer['lname']}', 
        `cus_fname` = '{$customer['fname']}', 
        `cus_initial` = '{$customer['initial']}', 
        `cus_areacode` = '{$customer['areacode']}', 
        `cus_phone` = '{$customer['phone']}', 
        `cus_balance` = '{$customer['balance']}'
        WHERE `cus_code` = '$id'";

        $result = $conn->query($query);

        return $result;
    }

    function deleteCustomer($id) {
        $conn = Connect();
        
        $query = "UPDATE `invoice`
                SET `cus_code` = NULL
                 WHERE `cus_code` = '$id'";
        $conn->query($query);

        $query = "DELETE FROM `customer` WHERE `cus_code` = '$id'";
        $result = $conn->query($query);

        return $result;
    }
    
    function numberFormatting($value){
        return '$'.number_format($value, 2);
    }
?>
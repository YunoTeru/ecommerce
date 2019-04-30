<?php

require 'connection.php';

class CustomerAccessObject extends Database{

    public function addCustomer($cust_fname, $cust_lname, $cust_dob, $cust_address, $cust_phone, $cust_register_date, $cust_login_name, $cust_login_password){
        $sql = "INSERT INTO customer(cust_fname, cust_lname, cust_dob, cust_address, cust_phone, cust_register_date, cust_login_name, cust_login_password)  VALUES ('$cust_fname', '$cust_lname', '$cust_dob', '$cust_address', '$cust_phone', '$cust_register_date', '$cust_login_name', '$cust_login_password')";
        $result = $this->conn->query($sql);   
        return $result;
    }

    public function retrieveALLCustomer(){
       
        $sql = "SELECT * FROM customer WHERE cust_status = 'A'";
        
        $result = $this->conn->query($sql);
        $rows = array();     
        while ($row=$result->fetch_assoc()){
        $rows[] = $row;
        }
        return $rows;
    }
    
    public function retrieveSingleCustomer($id){
        $sql = "SELECT * FROM customer WHERE cust_id = '$id'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updatecustomer($cust_fname, $cust_lname, $cust_dob, $cust_address, $cust_phone, $cust_register_date, $cust_login_name, $cust_login_password, $cust_id){
        $sql = "UPDATE customer SET cust_fname = '$cust_fname', cust_lname = '$cust_lname',
                cust_dob = '$cust_dob', cust_address = '$cust_address', cust_phone = '$cust_phone', cust_register_date = '$cust_register_date', cust_login_name = '$cust_login_name', cust_password = '$cust_login_password') 
                WHERE cust_id = '$cust_id'";
        $result = $this->conn->query($sql);
        return $result;

    }
    
    public function deletecustomer($cust_id){
        $sql = "UPDATE customer SET cust_status = 'D' WHERE cust_id = '$cust_id'";
        $result = $this->conn->query($sql); 
        return $result;
    }
    
    public function login($username, $password){
        $sql = "SELECT * FROM customer
                WHERE cust_login_name = '$username' AND cust_login_password = '$password'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        //echo $sql;
        return $row;
        //print_r($row);
    }

   

}

?>
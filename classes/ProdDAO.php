<?php

require 'connection.php';

class ProductAccessObject extends Database{

    public function addProduct($prod_name, $prod_desc, $prod_date, $prod_price, $prod_stock){
        $sql = "INSERT INTO product(prod_name, prod_desc, prod_date_added, prod_price, prod_stock) VALUES ('$prod_name', '$prod_desc', '$prod_date', '$prod_price', '$prod_stock')";
        $result = $this->conn->query($sql); //this will perform the addition of data to table product
        return $result;
    }

    public function retrieveALLProducts(){
        $sql = "SELECT * FROM product WHERE prod_status = 'A'";
        
        $result = $this->conn->query($sql);//mean excute and assaign it to the result variable
        $rows = array();//this will hold all array result variable
     
        while ($row=$result->fetch_assoc()){
        //condition:as long as there is a set of arrays being passed to the rows array
        //the loop will not stop
        $rows[] = $row;
        //so every row is assained to the rows array
        }
        return $rows;
    }

    public function retriveveSingleProduct($id){
        $sql = "SELECT * FROM product WHERE prod_id = '$id'";
        
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateproduct($prod_name, $prod_desc, $prod_date, $prod_price, $prod_stock, $prod_id){
        $sql = "UPDATE product SET prod_name = '$prod_name', prod_desc = '$prod_desc',
                prod_date_added = '$prod_date', prod_price = '$prod_price', prod_stock = '$prod_stock'
                WHERE prod_id = '$prod_id'";
        
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteProduct($prod_id){
        $sql = "UPDATE product SET prod_status = 'D' WHERE prod_id = '$prod_id'";
        
        $result = $this->conn->query($sql); 
        return $result;
    }

}

?>
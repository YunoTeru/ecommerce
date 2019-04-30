<?php

require 'connection.php';

class ProductAccessObject extends Database{

    public function addProduct($prod_name, $prod_desc, $prod_date, $prod_price, $prod_stock){
        $sql = "INSERT INTO product(prod_name, prod_desc, prod_date_added, prod_price, prod_stock) VALUES ('$prod_name', '$prod_desc', '$prod_date', '$prod_price', '$prod_stock')";
        $result = $this->conn->query($sql);
        return $result;
    }

}

?>
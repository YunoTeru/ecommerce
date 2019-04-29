<?php

//This is where we connect to the ecommerce database in the phpadmin


function connection(){

    $servername = "localhost";//localhost sever of admin
    $username = "root"; //using accessing
    $password = "root"; //in mac 'root'
    $database = "product"; //name of data base you want to sonnect

    $conn = new mysqli($servername, $username, $password, $database);

    //Checking the connection
    if($conn->connect_error){
        //$conn->connect_error is fixed variable that if we have an error cionnection
        die("Connection failed:" . $conn->$connect_error);
    }else{
        // echo "Successfully connected";
        return $conn;
    }

}


?>
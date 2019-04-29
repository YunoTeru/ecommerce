<?php
    
    require '../functions/prodDAO.php';
    if(isset($_POST['add'])){
        //initialazation of variables
        //getting the data from the form
        $prod_name = $_POST['prod_name'];
        $prod_desc = $_POST['prod_desc'];
        $prod_date = $_POST['prod_date'];
        $prod_price = $_POST['prod_price'];
        $prod_stock = $_POST['prod_stock'];
        addProduct($prod_name, $prod_desc, $prod_date, $prod_price, $prod_stock);
        header('Location: product_tbl.php');//this will redirect us to after product adding
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>INDEX</title>
    <style type="text/css">
        
        .jumbotron{

            background-color: #565656;
        }

        .display-4{

            font-family: 'Damion', cursive;

        }
    </style>
</head>
<body>
    <div class="jumbotron text-white">
        <h1 class = "display-4">Add Product</h1>
    </div>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="prod_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <input type="text" name="prod_desc" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Product Date Added</label>
                <input type="date" name="prod_date" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" name="prod_price" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Product Stock</label>
                <input type="number" name="prod_stock" id="" class="form-control">
            </div>
            <input type="submit" value="Add Product" name="add" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
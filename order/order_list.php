<?php
    session_start();
    if($_SESSION['logstat'] != "Active"){
        header('Location: ../index.php');
    }else{
        echo "Welcome User: ".$_SESSION['name']."<a href='../logout.php'>Logout</a>";
    }
    
    require_once '../functions/ordDAO.php';
    $prodList = getProductList();
    $user_id = $_SESSION['id']; //this is where we get the cust_id.
    if(isset($_POST['order'])){
        $prod_id = $_POST['prod_id'];
        $ord_quantity = $_POST['ord_quantity'];
        $ord_date_ordered = $_POST['ord_date_ ordered'];
        $ord_date_released = $_POST['ord_date_released'];
        addOrders($prod_id, $user_id, $ord_quantity, $ord_date_ordered, $ord_date_released);
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
    <title>Basic Order Form</title>
</head>
<body>
    <div class="jumbotron bg-light">
        <h3>Order List Form</h3>
    </div>
    <div class="container mt-3 p-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Product Name</label>
                <select name="product" id="" class="form-control">
                    <option value="---">Please Chose Product</option>
                    <?php
                        foreach($prodlist as $key => $values){
                            echo "<option value='".$values['prod_id']."'>".$values['prod_name']."</option>";
                        }
                    ?>
                </select>
            </div>
                <div class="form-group">
                    <label for="">How Many?(Quantity)</label>
                    <input type="number" name="ord_quantity" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date Ordered</label>
                    <input type="date" name="ord_date_ordered" value="<?php echo date('Y-m-d'); ?>" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date To Be Released</label>
                    <input type="date" name="ord_date_released" id="" value="<?php echo date('Y-m-d', strtotime('+5 days'));?>" id="" class="form-control">
                </div>
                <input type="submit" value="Order" name="order" class="btn btn-outline-success">
            </div>
        </form>
    </div>
</body>
</html>
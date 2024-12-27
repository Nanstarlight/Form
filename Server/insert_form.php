<?php

include 'connect.php';

$name = $_POST['p_name'];
$price = $_POST['p_price'];
$qty = $_POST['p_qty'];
$category = $_POST['select'];
$dt = date('Y-m-d');
$status = $_POST['st'];


if($name=="" || $price=="" || $qty=="" || $category=="") {
    echo "All is empty";
}else{
    $sql = "insert into tb_product (name,price,qty,category,created_at,active)
              values('$name','$price','$qty','$category','$dt','$status')";
    
    if(mysqli_query($conn, $sql)){
        echo "Insert is successful";
        header('location:../index.php');
    }
    else{
        echo"<p>'Insert is not successful'</p>";
    }
}
?>
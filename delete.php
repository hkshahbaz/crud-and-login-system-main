<?php
session_start();
include_once('connection.php');
mysqli_select_db ($conn,$dbname);

$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE from product WHERE p_id='$id'");

if($result){
        $_SESSION['product']= "Product Deleted Successfully!";
        header("location:selectpost.php");
    }else {
        echo "ERROR";
    }
?>

<?php
include 'cart1.php';
if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo $count;   
    // session_destroy(); 
}else{
    header("location:index1.php");
}
?>
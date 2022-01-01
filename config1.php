<?php
$server = "localhost";
$user = "root";
$pass = "Teja@12345";
$database = "amazon_page";
$con = mysqli_connect($server,$user,$pass,$database);

if(!$con){
    die( "<script>alert('connection failed')</script>");
}
?>
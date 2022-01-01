<?php
$server = "localhost";
$user = "root";
$pass = "Teja@12345";
$database = "amazon_page";
$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die( "<script>alert('connection failed')</script>");
}
?>
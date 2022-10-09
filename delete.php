<?php
include "config.php";

$id = $_GET['pid'];




$sql = "SELECT * FROM images WHERE pid = '$id' ";
$result = mysqli_query($link,$sql);

$data = mysqli_fetch_assoc($result);


$sql = "DELETE FROM images WHERE pid = '$id' ";
       
mysqli_query($link,$sql);

       header("Location: Food-menu.php");

?>

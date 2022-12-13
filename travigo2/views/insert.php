<?php
require('config.php');
require_once '../views/index1.php';
if(isset($_POST['upload']) ) {
    $name = $_POST['name'];
    $price= $_POST['price'];
    
    $IMAGE_location = $_FILES['IMAGE']['tmp_name'];
    $IMAGE_name = $_FILES['IMAGE']['name'];
    $IMAGE_up = "image/".$IMAGE_name;
    $insert = "INSERT INTO voyage ( name,price , IMAGE) VALUES('$name','$price','$IMAGE_up') ";
    mysqli_query($con, $insert);
    if(move_uploaded_file($IMAGE_location,'image/'.$IMAGE_name)){
         echo "<script>alert('upload correct')</script>";
    }else{
          echo "<script>alert('things is wrong')</script>"; 
    }
    header('location: index1.php');
}
?>
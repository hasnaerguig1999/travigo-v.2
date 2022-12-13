<?php
include('config.php');
if(isset($_POST['update']) ) {
    $id =$_POST['id'];
    $name =$_POST['name'];
    $price= $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       = 'image/'.$image_name;
    $update = "UPDATE voyage SET name='$name',price='$price',image='$image_up' WHERE id='$id' ";
    mysqli_query($con, $update);
    if(move_uploaded_file($image_location,'image'.$image_name)){
         echo "<script>alert('up date correct')</script>";
    }else{
          echo "<script>alert('things is wrong')</script>"; 
    }
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
   
    <link rel="stylesheet" href="./css/index.css">
  </head>
<body>
    <?php
    include('config.php');
    $id= $_GET['id'];
   
    $up = mysqli_query($con ,"select * from voyage where id=$id");
   $data = mysqli_fetch_array($up); //up connect all data in up
   ?>
   <center>
    
     <div class="main">
      <form action="up.php" method="post" enctype="multipart/form-data">
        <h2> upload voyage</h2>
        <!-- <img src="./img/img1.jpg" alt="logo" width="100%" > -->
           <input type="text" name="id" value='<?php echo $data['id']?>'>
           <br>
           <input type="text" name="name" value='<?php echo $data['name']?>'>
           <br>
           <input type="text" name='price'value='<?php echo $data['price']?>'>
           <br>

           
        
           <br>  
          <input type="file" id="file" name='image' style='display:none;' >
          <label   for="file"> Product Edit</label>
          <button name='update' type='submit'>upload</button>
           <br>
           <a href="voyage.php">show all voyagess</a>
      </form>
      </div>
      <p> Developer by hasnae</p>
    </center>
</body>
</html>
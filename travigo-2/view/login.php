<?php 
require_once '../controller/admin.controller.php';



?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="./css/tours.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<header>
  <a href="index.php">
		<img src="./img/11J-removebg-preview.png" alt="" width="49"
		height="49"></a>
		
	</header>

	

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
		</div>>
		
    
            <div class="add">
                <h2 style="color:white"> Log IN</h2>
                <h2 style="color:white"> </h2>
            <div class="d-flex justify-content-center">
            <form class="col-4" action="" method="post" autocomplete="off">
              <label for="name" style="color:white">email : </label>
              <input class="form-control"  type="text" name="email" > 
              <label for="username" style="color:white">password </label>
              <input class="form-control"  type="password" name="password" > 
              
              <button class="btn btn-primary" type="submit" name="login">Log in</button>
            </form>
            </div>
            </div>
        
		</div>
	</section>


	

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

</html>
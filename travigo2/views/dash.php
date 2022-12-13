<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css?=<?php time() ?>">
    <link rel="stylesheet" type="text/css" href="./css/index.css?=<?php time() ?>">
	<link rel="stylesheet" 
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<!--header--->
	

	<header>
        
		<a href="index.html" class="logo"><img src="./img/travel_day-removebg-preview (1).png" alt="travling" 
			width="60" 
		 height="60"> 
        
            <a href="#" class="logo"></a>
            <div class="bx bx-menu" id="menu-icon"></div>
    
            <ul class="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="tour.html">Tours</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactustravigo.html">Contact Us</a></li>
				<li><a href="dash.php">Dashboard</a></li>
            </ul>
        </header>

	<!--Home section--->
	<section class="home" id="home">
	
<?php
require 'config.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email= '$email' ");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div class="main">
    
    <form class="" action="" method="post" autocomplete="off">
    <h2>Login</h2>
      <label for="email" >E-mail      : </label>
      <input type="text" name="email" id = "email" required value="" class="inp1"> <br>
      
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value="" > <br>
      <button type="submit" name="submit" class="inp2">Login</button>
    </form>
    <br>
    <a href="insert.php">add</a>
 </div>
  </body>
</html>
	</section>




	





	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
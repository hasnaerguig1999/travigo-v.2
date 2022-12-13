<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

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
		<div class="home-text">
			<h1>Travigo <br> Travel</h1>
			<p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the world.</p>
			<a href="#" class="home-btn">Let's go now</a>
		</div>
	</section>

	
	</section>

	<!--Package section--->
	<section class="package" id="package">
		<div class="title">
			
		</div>

		<title>product</title>
   <style>
    .card{
      float:left;
      margin-top: 20px;
      margin-right:10px;
      margin-left:10px;
      border: 2px;
      border: #1F87CF;
      width: 10%;
      margin-top: 45px;
      padding: 10px ;
}
/* .card IMG{
  width:100%;
  height:200px;
} */
main{
  width:60%;

}

   </style>
    <link rel="stylesheet" href="./css/style.css">
  </head>
<body>
   <center>
    <h3>All products available<h3>
</center>
  <?php
include('config.php');
 $result = mysqli_query($con,"SELECT * from voyage");// give me  all  data de tbl
 ?> 
         
  
      

		

<!--Package section--->
<section class='package' id='package'>
		<div class='title'>
			<h2>Our Upcoming <br> Tour Package</h2>
		</div>

		<div class='package-content'>
		 <?php while($row = mysqli_fetch_array($result)){
			echo "
			<div class='box'>
				<div class='thum'>
				<img src='$row[image]'>
				<h3>$row[price]</h3>
				</div>

				<div class='dest-content'>
					<div class='location'>
					<h4>$row[name]</h4>
						
					</div>
					
				</div>
			</div>
			";
}
?>

<?php
include('config.php');
 $result = mysqli_query($con,"SELECT * from voyage");// give me  all  data de tbl
  while($row = mysqli_fetch_array($result)){
    echo "
          <center>
          <main>
            <div  class='card' style='width: 15rem;'>
                  <img src='$row[image]' width='50%'  class='card-img-top'>
                  <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    
                    <a href='delete.php? id=$row[id]' class='btn btn-danger' >delete</a> 
                    <a href='update.php? id=$row[id]' class='btn btn-primary'>upload</a>
                  </div>
            </div>
            </main>
          <center>
          ";
   }
    ?>		

		

		</div>
	</section>	
	</div>
	
	

	
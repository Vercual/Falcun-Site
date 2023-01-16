<?php

require("admin/common.php"); 

?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Falcun | Changelog</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<script src="https://kit.fontawesome.com/61296609d5.js" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<style>
			     .login  {
                    background-color: #161d34;
                    color: white;   
                }
			</style>
		</head>
		<body>	
		  		  <header id="header" id="home">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			          <li><a href="features.php">Features</a></li>
			          <li><a href="changelog.php">Changelog</a></li>
			          <li><a href="https://falcun.tebex.io/">Store</a></li>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Changelog				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="changelog.php">Changelog </a></p>
					
						</div>
						
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  

		




	<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 event-details-left">
						    
						    
						   <?php
						   
						               
                                                $query = "SELECT * FROM news WHERE news_visible = 0 ORDER BY news_time DESC"; 
                                                 
                                                try 
                                                { 
                                                    $stmt = $db->prepare($query); 
                                                    $stmt->execute(); 
                                                } 
                                                catch(PDOException $ex) 
                                                { 
                                                    die("Failed to run query: " . $ex->getMessage()); 
                                                } 
                                                $rows = $stmt->fetchAll(); 
                                                
                                                foreach($rows as $row): 
                                                        
                                                echo '<div class="details-content">';
                                                echo '<h1 class="mb-10">'.$row['news_title'].' '.date("d-m-Y", substr($row['news_time'], 0, 10)).'</h1>';
                                                echo '<p>'.$row['news_article'].'</p>';
                                                echo '</div><hr>';



                                                endforeach; 

                            ?>
	                              
	           
                                                        

						    
						    




							
						</div>
					
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->


			
			

		
			
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">

					<div class="footer-bottom row align-items-center">
						<p class="footer-text m-0 col-lg-6 col-md-12">
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Falcun</p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a target="_blank" href="http://twitter.com/falcunclient"><i class="fa fa-twitter"></i></a>
							<a target="_blank" href="discord.php"><i class="fab fa-discord"></i>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="https://static.namemc.com/js/three.min.js?v=d9f7c8e2c798bfbcd1f1ecd6a1ef6ef0"></script>
            <script src="https://static.namemc.com/assets/vendor/jquery/jquery.min.js"></script>
            <script src="js/player.js"></script>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
<?php
    require ("admin/common.php");
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
		<title>Falcun | Minecraft Client</title>

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
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								Falcun Client		
							</h1>
							<p class="pt-10 pb-10">
								A Minecraft Client built for factions, with no limitations
							</p>
							<a href="https://falcun.tebex.io/" class="primary-btn text-uppercase">Purchase</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->


			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="img/event-details-img.jpg" alt="">
							</div>
							<div class="details-content">
								<a href="#">
									<h4>About</h4>
								</a>
								<p>
								Falcun is a Minecraft based client. Falcun Clients' current focus is to provide a better experience for Minecraft-Factions players;  As previously stated, our objective with Falcun is to create a client that will aid the user with many aspects of Minecraft-Factions. Whether it is through our vastly improved Schematica options or through our Patchcrumbs, Falcun has a variety of unique options that are beneficial to the user. 
								</p>
							
							<p>In order for us to make the users experience better we often take suggestions from the community discord on what they would like to be implemented into Falcun. </p>

                            <p>From custom mods to aid with factions needs to FPS boosts. Falcun offers a variety of customizable mods, the ability to personalize the client to your liking, and cosmetics such as capes and emotes.</p>
							
							
							</div>
							<div class="social-nav row no-gutters">
							</div>
						</div>
				
						
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget popular-post-widget">
									<div class="popular-post-list">
										<div class="single-post-list d-flex flex-row align-items-center">
											
											
												<iframe src="https://discord.com/widget?id=677586082975449151&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
											
										</div>															
									</div>
								</div>
								
																
							</div>
						</div>
						
						
						
					</div>
				</div>	
			</section>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
					
			
			

				<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">FALCUN STATS</h1>
							<p>
								Falcun is a popular Minecraft client used by thousands of players a day, this section will have an array of statistics that will be updated soon.
							</p>
								 <a class="primary-btn wh" href="#">
							    
							    
							    <?php
							    $sql = "SELECT * FROM `play`"; 
                                $result = $db->prepare($sql); 
                                $result->execute(); 
                                echo ($result->rowCount() + 275000);
                                ?> Plays

							    
							    
							</a>  					
						</div>					
					</div>
				</div>	
			</section>
			
			
			
			
			
		
		
		

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Recent News & Updates</h1>
								<p>Keep up to date with falcun client latest news, change logs and more!</p>
							</div>
						</div>
					</div>				
					
					
					
				<div class="row">
					
					<?php
					            $query = "SELECT * FROM news WHERE news_visible=0 ORDER BY news_time DESC LIMIT 4"; 
                                                 
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
                        $epoch = $row['news_time'];                        
                        $dt = new DateTime("@$epoch"); // convert UNIX timestamp to PHP DateTime

						echo '<div class="col-lg-3 col-md-6 single-blog">';
						echo '<div class="thumb"><img class="img-fluid" src="img/'.$row['news_thumbnail'].'" alt=""></div>';
						echo '<p class="meta">'.$dt->format('d M Y').'  |  By '.$row['news_author'].'</p>';
						echo '<a href="changelog.php"><h5>'.$row['news_title'].'</h5></a>';
						echo '<p>'.substr($row['news_article'],0,150).'...'.'</p>';
						echo '<a href="changelog.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">More</span><span class="lnr lnr-arrow-right"></span></a>';	
						echo '</div>';
                                                        
                                                        
                                                        

                                                    endforeach; 
					
				        	?>
					
					
					
					
					
					
					
					
					
					
				
				</div>	
			</section>
			<!-- End blog Area -->			
			

						
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
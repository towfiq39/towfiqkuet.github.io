<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
			Tex'19
		</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/all.min.css">
        
        <!-- Custome CSS -->
    	<link rel="stylesheet" href="css/custom.css"> 
        
	</head>
	
	<body> 
		
		
		<header> 
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#" title="we Are Batch 19 !!!"><span class="text-info">Textile</span>'<span class="text-danger">19</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto ">
						<li class="nav-item ">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#heroes">Heroes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#students">Students</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#comments">Comments</a>
						</li>
						
						
					</ul>
					<form class="form-inline my-2 my-lg-0" method="POST">
						<input class="form-control mr-sm-2" name="find" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
					</form>
				</div>
			</nav>
			
		</header>
		
		<div class="header"> 
			
			<div class="bg_image">
				
				<figure class="text-right ">
				<img src="images/1.jpg" alt="" class="img-fluid " /></figure>
				
			</div>
			<div class="heading"> 
				
				<h1> WE'R <span class="text_change"></span> </h1>	
				
			</div>
			<div class="inner_heading"> 
				<p>this is dummy text</p>
				<input type="submit" class="btn btn-outline-success mr-3 font_size"  value="SEE US"/>
				<input type="submit" class="btn btn-dark font_size"  value="Among us"/>	
			</div>
			
		</div>
		
		<?php
			include("dbconnection.php");
			if(isset($_POST["search"])){
				$find=$_POST["find"];
				$sql="select * from user where name='$find' or roll='$find' or email='$find' ";
				$query=mysqli_query($conn, $sql);
				$datacount=mysqli_num_rows($query);
				
				if ($datacount<1){
				?>
				<script>
					alert("Not Regestar This Data!! Plz Regestration ")	
				</script>
				
				<?php
					
				}
				
				else{
					
					
					$row=mysqli_fetch_array($query);
					
					echo '<div class="jumbotron">';
					echo '<div class="container">';
					
					echo '<h1 class="">Your Data !!</h1>';
					
					echo '<table class="table">';
				 	echo '<tr>';
					echo '<td>ID</td>';
					echo '<td>Name</td>';
					echo '<td>Email</td>';
					echo '<td>Roll</td>';
					echo '</tr>';
					
					echo '<tr>';
					echo '<td>'.$row["ID"].'</td>';
					echo '<td>'.$row["name"].'</td>';
					echo '<td>'.$row["email"].'</td>';
					echo '<td>'.$row["roll"].'</td>';
					echo '</tr>';
					
					
					echo '</table>';
					
					
					echo '</div>';
					echo '</div>';
					
				}
			}
		?>
		
		<section class="jumbotron my-5 " id="heroes"> 
			<div class=" container mx-auto"> 
				
				<div class="heading-2 text-center my-3"> 
				<h1>OUR HEROES</h1> 
				<hr class="w-25 mx-auto bg-light" />
			</div>
			<div class="row mx-auto"> 
				<div class="col-lg-5 col-md-5 col-sm-11  text-center shadow small_responsive mr-5 mb-5">
					<div class="card hover_card" >
						<div class="card-header ">
							<figure class="">
								<img src="images/cr.png" class=" round_circle  " >
								
							</figure>
							
						</div>
						
						<div class="card-body">
							<h5 class="card-title"><span class="chnage_color">Md.Mushfiqur Rahman</span></h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="https://web.facebook.com/mushfiq.rahman.1690" class="btn btn-outline-dark" target="_blank"><span class="chnage_color">Contact</span></a>
						</div>
					</div>
					
				</div>	
				<div class="col-lg-5 col-md-5 col-sm-11  text-center shadow mr-5 mb-5 small_responsive">
					<div class="card hover_card" >
						<div class="card-header ">
							<figure class="">
								<img src="images/acr.png" class=" round_circle  " >
								
							</figure>
							
						</div>
						
						<div class="card-body">
							<h5 class="card-title"><span class="chnage_color">Shariar Shatil </span></h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="https://web.facebook.com/ice.bear.1984" class="btn btn-outline-primary"target="_blank"><span class="chnage_color">Contact</span></a>
						</div>
					</div>
					
				</div>	
			</div>
			</div>
			
		</section>
		
		<!-- our member starts-->
		
		<section class="jumbotron"  id="students">
			
			<div class="">
				
				<div class="heading-2 text-center my-3"> 
					<h1>WE'R HERE</h1> 
					<hr class="w-25 mx-auto" />
				</div>
				
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/fahim.png" alt="" class="img-fluid " />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/abir.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/arko.png" alt="" class="img-fluid" />
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/kowshik.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/mahatab.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/memma.png" alt="" class="img-fluid" />
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/munne.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/najid.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/rayhan.png" alt="" class="img-fluid" />
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/onu.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/pia.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/ridoy.png" alt="" class="img-fluid" />
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/sadman.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/saiful.png" alt="" class="img-fluid" />
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 mb-3"> 
									<img src="images/tarikul.png" alt="" class="img-fluid" />
								</div>
							</div>
						</div>
						
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<div class="icon"> 
						<i class="fas fa-angle-left"></i>
						</div>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<div class="icon"> 
						<i class="fas fa-angle-right"></i>
						</div>
					</a>
				</div>
				
				
			</div>
			
		</section>
		
		
		<!-- our member ends-->
		
		<!-- myself description start -->
		
		
		<section class="jumbotron">
			<div class="container"> 
				
				<div class="heading-2 text-center my-3"> 
					<h1>About Me</h1> 
					<hr class="w-25 mx-auto" />
					
				</div>
				
				
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 my_hover_img mt-3">
						<figure class="my_image_figure">
							<img src="images/me.png" alt="" class="img-fluid my_image" />
							
						</figure>
					</div>
					
					
					<div class="col-lg-6 col-md-6 col-sm-12 offset-lg-1">
						<h3> MD.Towfiq Imroz</h3>
						<p>i make this website and i passoinate this sector i make this website and i passoinate this sector i make this website and i passoinate this sector 
							i make this website and i passoinate this sector i make this website and i passoinate this sector i make this website and i passoinate this sector 
						i make this website and i passoinate this sector i make this website and i passoinate this sector i make this website and i passoinate this sector </p>
						<a href="https://web.facebook.com/towfikimrose.imrose.1/" target="_blank"><input type="button" class="btn btn-outline-dark " value="Contact" /></a>
					</div>
				</div>
				
			</div>
		</section>
		
		
		
		<!-- myself description end -->
		
		<!-- form start -->		
		
		
		<section class="jumbotron" id="comments">
			<div class="container">
				<div class="heading-2 text-center my-3"> 
					<h1>Please Add Your comment !!</h1> 
					<hr class="w-50 mx-auto" />
				</div>
				
				
				<form method="POST" >
					
					<div class="form-group">
						<label for="Name">Name: </label>
						<input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" required>
					</div>
					
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
					</div>
					
					<div class="form-group">
						<label for="Roll">Roll: </label>
						<input type="number" class="form-control" placeholder="Enter Roll Number" id="roll" name="roll" required>
					</div>
					
					<div class="form-group">
						
						<textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="Anything You Can Say" name="comment" required></textarea>
					</div>
					
					
					
					
					<input type="submit" name="done" value="Submit" class="btn btn-success"/>
					
				</form>
				
				
			</div>
		</section>
		<?php 
			include("dbconnection.php");
			
			if(isset($_POST["done"])){
				$name=$_POST["name"];
				$email=$_POST["email"];
				$email=$_POST["email"];
				$roll=$_POST["roll"];
				
				$sql="select * from user where email='$email'";
				$query=mysqli_query($conn,$sql);
				$mailcount=mysqli_num_rows($query);
				
				if ($mailcount>0){
				?>
				<script>
					alert("Already Regestar This email");	
				</script>
				
				<?php
				}
				else{
					$roll=$_POST["roll"];
					$sql="select * from user where roll='$roll'";
					$query=mysqli_query($conn,$sql);
					$rollcount=mysqli_num_rows($query);
					
					if ($rollcount>0){
					?>
					<script>
						alert("Already Regestar This Roll");	
					</script>
					
					<?php
					}
					else{
						
						$name=$_POST["name"];
						$email=$_POST["email"];
						$email=$_POST["email"];
						$roll=$_POST["roll"];
						
						$sql="insert into user (name,email,roll,comment)values('$name','$email','$roll','$comment')";
						$query=mysqli_query($conn, $sql);
						
						
						if($query){
						?>
						<script>
							alert("inserted successfully ");	
						</script>
						<?php
						}
						
						else{
							
						?>
						<script>
							alert("not inserted  ");	
						</script>
						<?php
						}
					}
					
				}
				
			}
			
		?>
		
		
		
		<!-- 
			
		-->
		
		
		<footer class="bg-dark p-5"> 
			
			<div class="footer_heading"> 
				
				<h1> Find Me On </h1>
				<div class="footer_link"> 
					<a href="https://web.facebook.com/towfikimrose.imrose.1/" target="_blank" ><i class="fab fa-facebook-messenger fa-2x mr-3"></i></a>
					<a href="https://web.facebook.com/towfikimrose.imrose.1/" target="_blank"><i class="fab fa-facebook-square fa-2x mr-3"></i></a>	
					<a href="#" ><i class="fab fa-twitter fa-2x mr-3 "></i></a>	
					<a href="https://www.youtube.com/"  target="_blank"><i class="fab fa-youtube  fa-2x mr-3 "></i></a>	
				</div>         
			</div>
			<div class="float-right text-white"> 
				<p class="size">This is Made By Towfiq 2020 |</p>
			</div>
		</footer>
		
		
		<!-- form ends -->
		
		
		
		<!-- Boostrap JavaScript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/all.min.js"></script>

		
	</body>
	
</html>																			
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome To New Generation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS Bootsrap 4.1v-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<!--CSS Animate-->
	<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<!--Bootstrap Glyphicons-->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	
	<style type="text/css">
	h2{
		font-family: Arial black;
		color: white;
		text-shadow: black 2px 2px;
		font-size: 2.5vw;
	}
	p[class*="animated slideInDown"]{
		font-size: 1.5vw;
		color: white;
		text-shadow: black 1px 1px;
	}
	div[class*="carousel-item"] img{
		opacity: 0.7;
	}
	ul li{
		text-decoration: none;
		list-style: none;
		font-weight: bolder;
		-webkit-transition:font-size 0s;
		transition: font-size 0s;
		position: relative;
		z-index: 9999999;
	}
	ul li a{
		color: black;
		font-size: 15px;

	}
	ul li a:hover{
		color: white;
		text-shadow: 2px 2px 4px black;
		font-size: 18px;
	}
	/*nav{
		background-image: url(Images/network.png);
		background-repeat: no-repeat;
		width: 18%;
		height: 15em;
		margin-left: -70px;
		}*/
		nav div{
			background-image: url(Images\site_top_circle_roating.png);
			background-repeat: no-repeat;
			background-size: contain;
			height: auto;
			margin-top: -10%;
			position: fixed;
			z-index: 99999;
		}

		li a{
			position: relative;
			left: -160px;
			top: 60px;
		}

		div[class*="col-sm-6"] .figure-caption{
			color: black;
			text-shadow: grey 5px 5px 4px ;
			font-size: 17px;
			font-weight: bolder;
		}
		div[role="dialog"] .figure-caption{
			font-size: 15px;
		}
		.cursorimg{
			cursor: pointer;
		}
		div[class*="col-sm-3"] img[data-toggle*="modal"]:hover{
			-webkit-transform: scale(0.7);
			transform: scale(0.7);
		}
		.whyusimg{
			animation: shake 5s;
			animation-iteration-count: infinite;
		}
		.card-text{
			font-weight: bolder;
			text-align: center;
			font-size: 15px;
		}
		
		.slideInDown{
			animation-duration: 1s;
		}
		p[class*="card-text"]{
			font-size: 17px;
		}
		figcaption[class*="figure-caption"]{
			font-size: 17px;
		}

		nav[id="nav-small-devices"], div[class="pos-f-t"]{
			display: none;
		}

		@media only screen and (max-width: 900px){

			nav[id="nav-small-devices"], div[class="pos-f-t"]{
				display: block;
			}

			nav[id="navi"]{
				display: none;
			}

			ul img{
				display: none;
			}
			
			.navbar-fixed {
				top: 10px;
				z-index: 100;
				position: fixed;
				width: 100%;
			}
			ul[id="ull"] li a{
				color: white; 
				left:0px;
				top: 0px;
				font-size: 15px;
			}
	</style>
</head>
<body style="background: linear-gradient(to right, #00cc99 0%, #000066 100%);" class="container">

	<div id="home"></div>
	<div class="jumbotron" style="margin-bottom: 0px; background: linear-gradient(to right, #00cc99 0%, #000066 100%); color: black; ">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<p class="animated fadeInDown" style="text-align: center; font-weight: bold; font-family: Broadway; font-size: 40px;"> NEW GENERATION </p>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<nav id="navi">
		<div>
			<ul>
				<img src="Images\site_top_circle_roating.png" style="z-index: 1; position: absolute; left: -200px;">
				<li class="nav-item active">
					<a class="nav-link slide-section" href="#home"><span class="glyphicon glyphicon-home"></span> HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#aboutus"><span class="glyphicon glyphicon-info-sign"></span> ABOUT US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#whyus"><span class="glyphicon glyphicon-tasks"></span> WHY US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#products"><span class="glyphicon glyphicon-folder-open"></span> PRODUCTS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#contactus"><span class="glyphicon glyphicon-envelope"></span> CONTACT US</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="ull">
      <li class="nav-item active">
					<a class="nav-link slide-section" href="#home"><span class="glyphicon glyphicon-home"></span> HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#aboutus"><span class="glyphicon glyphicon-info-sign"></span> ABOUT US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#whyus"><span class="glyphicon glyphicon-tasks"></span> WHY US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#products"><span class="glyphicon glyphicon-folder-open"></span> PRODUCTS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link slide-section" href="#contactus"><span class="glyphicon glyphicon-envelope"></span> CONTACT US</a>
				</li>
    </ul>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark" id="nav-small-devices">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

	<div class="container">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="img-fluid" src="Images\a.jpg" alt="First slide">
					<div class=" carousel-caption ">
						<h2 class="animated slideInDown">EXPERT & EXPERIENCED COMPUTER ENGINEERS</h2>
						<p class="animated slideInDown">"TOTAL CUSTOMER SATISFACTION" IS THE MANTRA WHICH DRIVES US TO PROVIDE COMPETENT, EFFICIENT AND SWIFT SERVICES TO OUR CLIENTS.
						</p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="img-fluid" src="Images\b.jpg" alt="Third slide">
					<div class="carousel-caption ">
						<h2 class="animated slideInDown">FLEXIBLE SOLUTIONS TO YOUR PROBLEMS</h2>
						<p class="animated slideInDown">WE WILL SOLVE YOUR EACH AND EVERY PROBLEM WITH EFFECTIVE SOLUTIONS.</p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="img-fluid" src="Images\c.jpg" alt="Second slide">
					<div class="carousel-caption ">
						<h2 class="animated slideInDown">QUICK REPONSE TIME</h2>
						<p class="animated slideInDown">WE DO NOT DELAY YOUR SERVICES. YOUR TIME IS PRECIOUS TO US.</p>
					</div>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>	
		</div>
	</div>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-3 card" style="border-radius:10px;">
				<img data-toggle="modal" data-target="#myModal" class="img-fluid cursorimg card-img-top" src="Images\computer_networking.png">
				<div class="card-body">
					<p class="card-text">Networking and security solutions</p>
				</div>
				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<center><h4 class="modal-title" style="font-weight: bold;">Netwokring & security solutions</h4></center>
								<button type="button" class="close" data-dismiss="modal">&times;</button>

							</div>
							<div class="modal-body">
								<center><figure class="figure text-center">
									<img class="img-thumbnail" src="Images\computer_networking.png">
									<figcaption class="figure-caption text-center">
										Networking & Security Solutions<br>
										Building new Networks<br>
										Server revamping, installing & configuring<br>
										Data, Server & IT Security Solutions<br>
									Virtual Private Networks, Point to Point connectivity through UTMs</figcaption>
								</figure>
							</center>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-sm-3 card" style="border-radius:10px;">
			<img class="img-fluid cursorimg card-img-top" data-toggle="modal" data-target="#myModal1" src="Images\OTS.jpg" style="height:190px;">
			<div class="card-body">
				<p class="card-text">AMC</p>
			</div>
		</div>
		<!-- Modal -->
		<div id="myModal1" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<center><h4 class="modal-title" style="font-weight: bold;">AMC</h4></center>
						<button type="button" class="close" data-dismiss="modal">&times;</button>

					</div>
					<div class="modal-body">
						<center>
							<figure class="figure text-center">
								<img class="img-thumbnail" src="Images\OTS.jpg">
								<figcaption class="figure-caption text-center">
									On-site Computer Repair support<br>
									Quick Remote Support<br>
									No any Hidden charge<br>
									Troubleshooting various devices<br>
									No visit bounded (Unlimited Visit)
								</figcaption>
							</figure>
						</center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>

		<div class="col-sm-3"></div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-3 card" style="border-radius:10px;">
			<img class="img-fluid cursorimg card-img-top" data-toggle="modal" data-target="#myModal2" src="Images\Old_PC_for_Sell_Purchase_Rent_b.jpg">
			<div class="card-body">
				<p class="card-text">IT Products</p>
			</div>
		</div>
		<!-- Modal -->
		<div id="myModal2" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<center><h4 class="modal-title" style="font-weight: bold;">IT Products</h4></center>
						<button type="button" class="close" data-dismiss="modal">&times;</button>

					</div>
					<div class="modal-body">
						<center><figure class="figure text-center">
							<img class="img-thumbnail" src="Images\Old_PC_for_Sell_Purchase_Rent_b.jpg">
							<figcaption class="figure-caption text-center">
								Laptops<br> Desktop PCs<br> All In One PCs<br> Workstations<br> Servers<br> Printers<br> Plotters<br> Scanners etc<br> Companies represented: IBM Lenovo, HP, Dell, Intel and Fujitsu
							</figcaption>
						</figure></center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>

		<div class="col-sm-3 card" style="border-radius:10px;">
			<img class="img-fluid cursorimg card-img-top" data-toggle="modal" data-target="#myModal3" src="Images\itservice_image1.png">
			<div class="card-body">
				<p class="card-text">Services</p>
			</div>
		</div>
		<!-- Modal -->
		<div id="myModal3" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<center><h4 class="modal-title" style="font-weight: bold;">Services</h4></center>
						<button type="button" class="close" data-dismiss="modal">&times;</button>

					</div>
					<div class="modal-body">
						<center><figure class="figure text-center">
							<img class="img-thumbnail" src="Images\itservice_image1.png">
							<figcaption class="figure-caption text-center">
								AMCs – Comprehensive & Non Comprehensive<br>
								FMS - Facility Management Services<br>
								Mailing Solutions, Cloud solutions etc.
							</figcaption>
						</figure></center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>

		<div class="col-sm-3"></div>
	</div>
</div><div id="aboutus"></div><br><br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container-fluid" style="background: white; border-radius: 10px;">
				<h3 style="font-size: 40px; font-family: Broadway; font-weight: bold; text-align: center;">
					ABOUT US
				</h3>
				<hr>
				<p style="font-family: Times News Roman ; font-size: 17px;">
					NEW GENERATION, was established to provide diverse range of IT Products, Innovative Technology Solutions, IT Enabled Services and support that meets a variety of our customer’s IT needs.

					Over a decade of customer oriented spirit has helped us evolve as experts in building Networks (LANs, WANs), Data Backup Storage solutions, Network & IT Security Solutions etc. Our very talented & dedicated technical team has enabled us to differentiate through high quality service support to our customers
				</p>
				<div class="row">
					<div class="col-sm-6">
						<br><br><heading class="h2" style="font-weight: bolder; font-family: Times News Roman ;">
							OUR VISION
						</heading>
						<p style="font-size: 17px; font-family: Times News Roman ;">
							"Simplifying Information Technology"
						</p>

						<br><heading class="h2" style="font-weight: bolder; font-family: Times News Roman ;">
							OUR MISSION
						</heading>
						<p style="font-size: 17px; font-family: Times News Roman ;">
						To provide trend setting solutions for consistent service delivery through our proﬁcient technical team</p>
					</div>
					<div class="col-sm-6">
						<img class="img-fluid" src="Images\earth-bg.png">
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div><div id="whyus"></div><br><br><br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container-fluid" style="background: white; border-radius: 10px;">
				<h3 style="font-size: 40px; font-family: Broadway; font-weight: bold; text-align: center;">WHY US</h3><hr>
				<p style="font-family: Times News Roman ; font-size: 17px;">Association with Industry Giants
					We partner with Premium IT product brands. It inspires us to deliver great value to our clients' needs by providing them effecient, reliable & cost effective products & services.
					<br><br>
					Specialized Teams
					As Small, Medium & Large business segment's IT needs are different, we have separate Presale & Post sale tech-teams to cater to their varied IT infrastructure needs.
					<br><br>
					Preferred by Client
				Our clients prefer us for our ability to understand, analyze & implement eficient & reliable IT solutions. Most importantly, the Integrity & Trust are the qualities that makes them love to be associated with us.</p><br><br><br>
				<center>
					<img class="img-fluid whyusimg" src="Images/img6 (2).png">
					<img class="img-fluid whyusimg" src="Images/187358-hardware.png">
					<img class="img-fluid whyusimg" src="Images/187358-hardware - Copy.png">
					<img class="img-fluid whyusimg" src="Images/187358-hardware - Copy - Copy (2).png">
				</center>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div><div id="products"></div><br><br><br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container-fluid" style="background: white; border-radius: 10px;">
				<h3 style="font-size: 40px; font-family: Broadway; font-weight: bold; text-align: center;">PRODUCTS WE DEAL IN</h3><hr>
				<div class="row">
					<div class="col-sm-6">
						<figure class="figure text-center">
							<img class="img-fluid figure-img" src="Images\IT.png">
							<figcaption class="figure-caption text-center">IT RELATED HARDWARE</figcaption>
						</figure>

					</div>
					<div class="col-sm-6">
						<figure class="figure text-center">
							<img class="img-fluid figure-img" src="Images\Printers.png">
							<figcaption class="figure-caption text-center">PRINTERS</figcaption>
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<figure class="figure text-center">
							<img class="img-fluid figure-img" src="Images\zicom.png">
							<figcaption class="figure-caption text-center">CAMERAS</figcaption>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="figure text-center">
							<img class="img-fluid figure-img" src="Images\1.png">
							<figcaption class="figure-caption text-center">ANTIVIRUS</figcaption>
						</figure>
					</div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</div><div id="contactus"></div><br><br><br><br>


<div class = "container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container-fluid" style="background: white; border-radius: 10px  10px 0 0 ;">
				<h3 style="font-size: 40px; font-family: Broadway; font-weight: bold; text-align: center;">CONTACT US</h3><hr>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<h3 style="color: black; font-family: Lucida Fax; text-shadow: 2px 2px 5px grey">CONNECT WITH US</h3>
						<p style="color: black; font-size: 13px; font-family: Lucida Fox; font-weight: bolder;">Call us at: +91-9811177537</p>
						<p style="color: black; font-size: 13px; font-family: Lucida Fox; font-weight: bolder;">Email: inderpalsingh@newgeneration.co.in</p>
						<p style="color: black; font-size: 13px; font-family: Lucida Fox; font-weight: bolder;">Address: 2695, Shadipur Main Bazaar Road, New Delhi-110008, India</p>
						<br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.3929490304463!2d77.16159151468061!3d28.647950682411604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02eec4799ff5%3A0x1b3e8a3c00220eb5!2s2695%2C+Shadipur+Main+Bazar+Rd%2C+Shadipur%2C+New+Delhi%2C+Delhi+110008!5e0!3m2!1sen!2sin!4v1529530287824" class="img-fluid" width="400" height="300" frameborder="0" style="border:0; margin-top: 10px;" allowfullscreen></iframe>
					</div>
					<div class="col-sm-2">
					</div>
					<div class="col-sm-4">
						<h3 style="color: black; font-family: Lucida Fax; text-shadow: 2px 2px 5px grey">CONTACT US</h3>
						<p style="color: black; font-family: Lucida Fax;">
							Ask out your queries!
						</p>
						<form method="POST" action="Includes/query.inc.php">
							<div class="form-group" style="margin-top: 30px">
								<label style="font-size: 17px; color: black;">Full Name:</label><input  class="form-control" type="text" name="name">
							</div>
							<div class="form-group">
								<label style="font-size: 17px; color: black;">Phone Number:</label><input  class="form-control" type="text" name="number">
							</div>
							<div class="form-group">
								<label style="font-size: 17px; color: black;">Email Address:</label><input  class="form-control"  type="email" name="email">
							</div>
							<div class="form-group">
								<label style="font-size: 17px; color: black;">Query:</label><textarea class="form-control" rows="5" id="comment" name="msg"></textarea>
							</div>
							<button class="btn btn-primary" name="query" style="font-size:17px;">Submit</button>
						</form>
						<br><br>
					</div>
				</div>
			</div>

			<div class="col-sm-3"></div>
		</div>
	</div>
</div>
<!--JQuery 4.1v-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--Popper 4.1v-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--Javascript 4.1v-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {

		$(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
      if ($(window).scrollTop() > 55) {
      	$('#nav-small-devices, .pos-f-t').addClass('navbar-fixed');
      }
      if ($(window).scrollTop() < 54) {
      	$('#nav-small-devices, .pos-f-t').removeClass('navbar-fixed');
      }
  });
	});
</script>
</body>
</html>
<!DOCTYPE html>
<html>
	
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="icon" href="logo.png">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<title>AMAAN World News</title>
		
		<style>
			
            html { 
              background: url(<?php echo base_url(). 'images/weather.png' ?>) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
			body {
				margin:0;
				padding:0;
				overflow-x:hidden;
                background: none
			}
			#nav-link-color {
				color:white
			}
			
			* {margin:0;padding:0;border:0 none;position: relative; outline: none;}
            .design > a {
              text-decoration: none;
              color: rgba(0,0,0,.4);
              z-index: 1;
            }

            .design > a:before {
              content: "";
              position: absolute;
              width: 100%;
              height: 3px;
              bottom: 0;
              left: 0;
              background: #9CF5A6;
              visibility: hidden;
              border-radius: 5px;
              transform: scaleX(0);
              transition: .25s linear;
            }
            .design > a:hover:before,
            .design > a:focus:before {
              visibility: visible;
              transform: scaleX(0.6);
            }
            .design a:before {
                background: rgba(0,0,0,0);
                box-shadow: 0 0 10px 2px #ffdb00;  
            }

			.follow {
				float:left;
				padding:5px 10px;
				margin:5px;
				background-color:white
			}
			.shake:hover {
			  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
			  transform: translate3d(0, 0, 0);
			  backface-visibility: hidden;
			  perspective: 1000px;
			}
			@keyframes shake {
			  10%, 90% {
				transform: translate3d(-1px, 0, 0);
			  }
			  20%, 80% {
				transform: translate3d(2px, 0, 0);
			  }
			  30%, 50%, 70% {
				transform: translate3d(-4px, 0, 0);
			  }
			  40%, 60% {
				transform: translate3d(4px, 0, 0);
			  }
			}
			.sidenav {
				height: 100%; 
				width: 0; 
				position: fixed; 
				z-index: 1; 
				top: 0;
				left: 0;
				background-color: #111; 
				overflow-x: hidden; 
				padding-top: 60px; 
				transition: 0.5s; 
			}
			.sidenav a {
				padding: 8px 8px 8px 32px;
				text-decoration: none;
				font-size: 25px;
				color: #818181;
				display: block;
				transition: 0.3s
			}
			.sidenav a:hover, .offcanvas a:focus{
				color: #f1f1f1;
			}
			.sidenav .closebtn {
				position: absolute;
				top: 0;
				right: 25px;
				font-size: 36px;
				margin-left: 50px;
			}
			#main {
				transition: margin-left .5s	
			}
			@media screen and (max-height: 450px) {
				.sidenav {padding-top: 15px;}
				.sidenav a {font-size: 18px;}
			}
            .weather { 
                text-align: center;
                margin-top: 150px;
                                
            }
            .alert {
                margin-top: 20px
            }
		</style>
	</head>
	
	<body>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="world.html">World</a>
		  <a href="education.html">Education</a>
		  <a href="travel.html">Travel</a>
		  <a href="health.html">Health</a>
		  <a href="#" data-toggle="modal" data-target="#login">Login</a>
		  <a href="#" data-toggle="modal" data-target="#signup">Sign Up</a>
		  <p class="text-muted" style="font-size:20px;margin:60px auto 5px 35px">MORE</p>
		  <a href="author.html">Author</a>
		  <a href="contact.html">Contact</a>
		  <a href="follow.html">Follow</a>
          <a href="credits.html">Credits</a>
		</div>
		
		<div id="main">
			<nav class="navbar navbar-toggleable-lg navbar-light" style="background-color:#4A235A" id="top">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<span class="navbar-brand" onclick="openNav()" style="cursor:pointer">
					<i class="fa fa-list-ul" aria-hidden="true" style="color:white"></i>
				</span>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mt-2 mt-md-0 nav nav-bordered">
						<li class="nav-item active lead design">
							<a class="nav-link" id="nav-link-color" href="index.html">Home</a>
						</li>
						<li class="nav-item lead design">
							<a class="nav-link" id="nav-link-color" href="sport.html">Sport</a>
						</li>
						<li class="nav-item lead design">
							<a class="nav-link" id="nav-link-color" href="#">Weather</a>
						</li>
						<li class="nav-item lead design">
							<a class="nav-link" id="nav-link-color" href="tech.html">Technology</a>
						</li>
					</ul>
					
					<ul class="ml-auto navbar-nav">
					   <li class="nav-item lead design">
							<a class="nav-link" id="nav-link-color" href="#" data-toggle="modal" data-target="#login">Login</a>
						</li>
						<li class="nav-item lead design">
							<a class="nav-link" id="nav-link-color" href="#" data-toggle="modal" data-target="#signup">Sign Up</a>
						</li>
					</ul>
					
					<div style="margin-left:20px">
						<div class=" input-group">
							<form class="form-inline my-2 my-lg-0" id="navBarSearchForm" style="padding:7px 15px 0 0">
								<input class="form-control" style="border-radius:0" type="text" placeholder="Search anything">
								<div class="input-group-btn">
									<button class="btn my-2 my-sm-0" style="border-radius:0;background-color:white;padding:7px;cursor:pointer" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</div>
							</form>
						</div>
					</div>
									
				</div>
			</nav>	
			
            <div class="weather offset-md-4 col-md-4" style="margin-bottom:200px">
                
                <h1>What's The Weather?</h1>
                <?php echo form_open('weather/display'); ?>
                  <div class="form-group">
                    <label for="city">Enter the name of a city</label>
                    <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp" placeholder="Eg. Paris" style="margin:20px 0" value="<?php echo set_value('city'); ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close(); ?>
                
                <div id="weather">
                    <?php 
                        
                        if($this->session->flashdata("error_message")) {
                            echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata("error_message").'</div>'; 
                        } else if($this->session->flashdata("success_message")) {
                            echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata("success_message").'</div>';
                        }
                        /*if ($weather) {
                            echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
                        } else if ($error) {
                            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                        }*/
              
                    ?>
                </div>
                
            </div>
			
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top:150px">
                <div class="modal-dialog" role="document">
                     <div style="border:1px solid gray;border-radius:6px;box-shadow: 2px 2px 5px white;background-color:white">
			             <div style="font-size:30px;text-align:center;border-top-left-radius:6px;border-top-right-radius:6px;background-color:#4A235A;color:white;padding-top:10px;padding-bottom:15px">Login</div>

                        <div class="container">
                            <input type="text" class="form-control" placeholder="Email" style="margin:20px auto">
                            <input type="password" class="form-control" placeholder="Password" style="margin:20px auto">

                            <div>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Remember Me</span>
                                </label>
                            </div>

                            <div style="text-align:center;margin-top:20px">
                                <button type="button" style="width:100%;border-radius:0"class="btn btn-primary">Login</button>
                                <div>or <span style="color:#025AA5"><a href="#">Forgot Password</a></span></div>
                                <div style="font-size:11px;margin-top:10px;border-bottom:1px solid gray;padding-bottom:15px;">By signing up, you agree to our <a style="color:#025AA5">Terms of Use</a> and <a style="color:#025AA5">Privacy Policy</a>.</div>
                            </div>

                            <div style="text-align:center;padding-top:10px;padding-bottom:20px">

                                Don't have an account? <span style="color:#025AA5"><a href="#" data-toggle="modal" data-target="#signup" onclick="$('#login').modal('hide')">Sign Up</a></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top:150px">
                <div class="modal-dialog" role="document">
                    <div style="border:1px solid gray;border-radius:6px;box-shadow: 2px 2px 5px white;background-color:white">
                        <div style="font-size:30px;text-align:center;border-top-left-radius:6px;border-top-right-radius:6px;background-color:#4A235A;color:white;padding-top:10px;padding-bottom:15px">Sign Up</div>

                        <div class="container">
                            <div class="input-group" style="margin:20px auto">
                              <input type="text" class="form-control" placeholder="First Name" data-toggle="tooltip" data-placement="bottom" title="Enter your First Name">
                              <input type="text" class="form-control" placeholder="Last Name"data-toggle="tooltip" data-placement="bottom" title="Enter your Last Name">
                            </div>

                            <input type="email" class="form-control" placeholder="Email" style="margin:20px auto" data-toggle="tooltip" data-placement="right" title="Enter your email">
                            <input type="password" class="form-control" placeholder="Password" style="margin:20px auto" data-toggle="tooltip" data-placement="right" title="Enter password">

                            <div style="text-align:center;margin-top:20px">
                                <button type="button" style="width:100%;border-radius:0"class="btn btn-primary">Sign Up</button>
                                <div style="font-size:11px;margin-top:10px;border-bottom:1px solid gray;padding-bottom:15px;">By signing up, you agree to our <a style="color:#025AA5">Terms of Use</a> and <a style="color:#025AA5">Privacy Policy</a>.</div>
                            </div>

                            <div style="text-align:center;padding-top:10px;padding-bottom:20px">

                                Already have an account? <span style="color:#025AA5"><a href="#" data-toggle="modal" data-target="#login" onclick="$('#signup').modal('hide')">Login</a></span>

                            </div>
                        </div>
                    </div> 
                </div>
            </div>
			
            <div class="container-fluid" style="background-color:#333333;position:fixed;bottom:0;width:100%">
				<div class="row">
					<div class="col-md-6">
						<p style="font-size:12px;color:white;margin-bottom:0;padding:10px">Copyright &copy; 2017 AMAAN World News, All Rights Reserved</p>
					</div>
					
					<div class="col-md-3 offset-md-3">
						<ul style="list-style:none;color:white">
							<li>
								<a class="rounded-circle shake" style="float:left;padding:5px 13px;margin:5px;background-color:white" href="https://www.facebook.com/amaan.iqbal.90813" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a class="rounded-circle follow shake" href="https://twitter.com/amaan_iqbal9" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a class="rounded-circle shake" style="float:left;padding:5px 7px;margin:5px;background-color:white" href="https://plus.google.com/u/0/116420960491695673827?prsrc=3" rel="publisher" target="_blank" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</li>
							<li>
								<a class="rounded-circle follow shake" href="https://mail.google.com/mail/u/0/#inbox?compose=15c6942575c494ec" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";
			}
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft = "0";
			}
		</script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		
	</body>

</html>
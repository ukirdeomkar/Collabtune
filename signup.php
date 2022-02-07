<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		
		<div class="container-login100" style="background-image: url('images/wes-hicks-MEL-jJnm7RQ-unsplash\ \(1\).jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="php/signup.php">
					<span class="login100-form-title p-b-10 p-t-10">
						CollabTune
					</span>
					<span class="login100-form-subtitle p-b-15 p-t-0">
						Collaboration Platform For Musicians...
					</span>
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<i class="fas fa-music"></i>
					</span>

					<span class="login100-form-login p-b-34 p-t-27">
						Sign Up
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="	&#xf15a;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Artist Name">
						<input class="input100" type="text" name="artist_name" placeholder="Your Artist Name">
						<span class="focus-input100" data-placeholder="&#xf200;"></span>
					</div>
                   
                    <div class="wrap-input100 validate-input" data-validate = "Enter Contact">
						<input class="input100" type="text" name="contact" placeholder="Instgram Url">
						<span class="focus-input100" data-placeholder="&#xf34f;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Link">
						<input class="input100" type="text" name="link" placeholder="Link to your Musics">
						<span class="focus-input100" data-placeholder="&#xf14c;"></span>
					</div>
                   
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Select Genre">
						<select class="input100" type="text" name="genre" placeholder="Genre">
							<option  value="null">Select Genre</option>
							<option value="Blues">Blues</option>
							<option value="Classical">Classical</option>
							<option value="Country">Country</option>
							<option value="Electronic">Electronic</option>
							<option value="Folk"> Folk</option>
							<option value="Hip-hop">Hip-hop</option>
							<option value="Jazz">Jazz</option>
							<option value="Rock">Rock</option>
						</select>
						<span class="focus-input100" data-placeholder="&#xf3ab;"></span>
					</div>
                  <!-- <label for="myfile" class="profile">Upload your profile picture:</label>
                 <br><input type="file" name="profilePicture"><br><br> -->

				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signup" type="signup">
							Signup
						</button>
				
					
					</div>
					<div class="text-center p-t-15">
						<a class="txt1" href="./index.php">
							Already Registered? Log in Now!
						</a> <br>
						<!-- <a class="txt1" href="">
							Forgot Password?
						</a> -->
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--============================== Fontawesome ===================================== -->
	<script src="https://kit.fontawesome.com/f6a7b0942f.js" crossorigin="anonymous"></script>

</body>
</html>
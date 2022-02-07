
<?php
include('./php/login.php');
@$session = $_SESSION['email_id'] ;
if(@$session == false){
    echo("<script>alert('Session Expired !! Please Login agian')</script>");
    echo("<script>window.location = './index.php'</script>");
}
$query = mysqli_query($Connect, "SELECT * FROM `user` WHERE `email_id`='$session'");
$row = mysqli_fetch_assoc($query);
$artist_name = $row['artist_name'];
$genre = $row['genre'];
$bio = $row['bio'];
$user_usernmae = $row['user_username'];
$contact = $row['contact'];
$link = $row['link'];


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select3/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/profile.css">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
</div>	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="home.php">
            <h3 class="font-weight-bolder mb-0">Collabtune</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forum.php">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recordlabel.php">Record labels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php"> Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>


	
</div>	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(images/photo-11.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">My Account</h1>
  </div>
</div>
<section id="blog" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                 </div>
            
            <div class="container">
              <div class="main-body">
              
                 
              
                    <div class="row gutters-sm">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                              <?php 
                              
                              $query2 = " SELECT * FROM `user` WHERE `email_id` = '$session' ";
                              $res2 = mysqli_query($Connect,$query2);
                              $row2= mysqli_fetch_assoc($res2);
                              $profile_pic =$row2['profile_pic'];
                              $profile_img = './php/uploads/'.$profile_pic;
                              if ($profile_pic == ''){
                                $profile_img = './images/blank_profile.png';
                              }
                              
                              
                              
                              
                              ?>
                        
                              <img src="<?php echo $profile_img?>" alt="Admin" class="rounded-circle" width="150">
                              <div class="mt-3">
                                <h4><?php echo $artist_name ?></h4>
                                <p class="text-secondary mb-1"><?php echo $genre?></p>
                                 </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                      <div class="col-md-8">
                        <div class="card mb-3">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $user_usernmae?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Instagram Profile</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <a href="<?php echo $contact?>" ><?php echo $contact?></a>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Link to music</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <a href="<?php echo $link?>"><?php echo $link?></a>
                              </div>
                            </div>
                            
                          
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Bio</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $bio?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Genre</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $genre?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $_SESSION['email_id']?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank" href="edit_account.php">Edit</a>
                                <a class="btn btn-info "  href="./php/logout.php">Logout</a>

                              </div>
                            </div>
                          </div>
                        </div>
          
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

          <!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select3/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 
	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>

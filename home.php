<?php
include('./php/login.php');
@$session = $_SESSION['email_id'] ;
if(@$session == false){
    echo("<script>alert('Session Expired !! Please Login agian')</script>");
    echo("<script>window.location = './index.php'</script>");
}
$query = mysqli_query($Connect, "SELECT * FROM `user` WHERE `email_id`='$session'");
$row = mysqli_fetch_assoc($query);
$query1 = $query = mysqli_query($Connect, "SELECT * FROM `user` WHERE `email_id`!='$session'");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
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

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
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


	
</div>	<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
    <h1 class="display-1 mb-4">Collab<br>Tune</h1>
  </div>
  <div class="rectangle-1"></div>
  <div class="rectangle-2"></div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>
  <div class="circle-1"></div>
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="triangle triangle-1">
  	<img src="images/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-2">
  	<img src="images/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-3">
  	<img src="images/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-4">
  	<img src="images/obj_triangle.png" alt="">
  </div>
</div>	<!-- Features Section-->
<section id="features" class="bg-white">
    <div class="container">
        <div class="section-content">

            <div class="row">
                <!-- Features Holder-->
                <div class="col-md-10 offset-md-1 features-holder">
                    <div class="row">
                    <section id="blog" class="bg-white">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title">Collab with your favourite artist!</h2>
    </div>
            <div class="row">
               
                <div class="col-md-12 blog-holder">
                    <div class="row">
                      
                        <?php 
                        $i=1;
                        while($row1=mysqli_fetch_array($query1) ){
                            $username_display = $row1['user_username'];
                            $artist_name_display = $row1['artist_name'];
                            $contact_display = $row1['contact'];
                            $link_display = $row1['link'];
                            $genre_display = $row1['genre'];
                            $bio_display = $row1['bio'];
                            $profile_pic =$row1['profile_pic'];
                            $profile_img_display = './php/uploads/'.$profile_pic;
                            if ($profile_pic == ''){
                            $profile_img_display = './images/blank_profile.png';
                            }


                        ?>
                        <div class="col-md-4 blog-item-wrapper" data-aos="fade-up">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="single.php"><img src="<?php echo $profile_img_display?>" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-tag">
                                        <a href="#"><h6><small><?php echo $genre_display?></small></h6></a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="<?php echo $link_display?>"><h4><?php echo $artist_name_display?></h4></a>
                                    </div>
                                    <div class="blog-meta">
                                        <p class="blog-comment"><a href="<?php echo $contact_display?>"><?php echo $username_display?></a></p>
                                    </div>
                                    <div class="blog-desc">
                                        <p><?php echo $bio_display?></p>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <?php 
                            $i++;
                        }
                        ?>
                        <!-- End of Blog Item -->
                         <!-- Blog Item -->
                         <!-- <div class="col-md-4 blog-item-wrapper" data-aos="fade-up">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#"><img src="images/download (8).png" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-tag">
                                        <a href="#"><h6><small>Cinematic/Orchestral</small></h6></a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="https://www.cedillerecords.org/"><h4>Cedille Records.</h4></a>
                                    </div>
                                    <div class="blog-meta">
                                        <p class="blog-comment"><a href="">Based in Chicago</a></p>
                                    </div>
                                    <div class="blog-desc">
                                        <p>A nonprofit record label, Cedille’s mission is to produce and disseminate audiophile recordings presenting the finest classical music performers and composers in and from Chicago. </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End of Blog Item -->
                    </div>
                </div>
                <!-- End of Blog -->
            </div>
        </div>
    </div>
</section>
                    </div>
                </div>
                <!-- End of Features Holder-->
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section-->
            </div>
        </div>
    </div>
</section>
<!-- End of Portfolio Section -->		<!-- External JS -->
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

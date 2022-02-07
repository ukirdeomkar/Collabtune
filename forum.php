<?php
include('./php/login.php');
@$session = $_SESSION['email_id'] ;
if(@$session == false){
    echo("<script>alert('Session Expired !! Please Login agian')</script>");
    echo("<script>window.location = './index.php'</script>");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact us</title>
    <meta name="description" content="CollabTune">
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
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="home.php">
            <h3 class="font-weight-bolder mb-0">CollabTune</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
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

	
</div>		<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(images/photo-10.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Forum</h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <!-- <div class="title-wrap" data-aos="fade-up">
                <h5 class="section-title">CollabTune-Collaboration Platform For Musicians is developed by Mangesh Dongare.</h5>
                <p class="section-sub-title">The main purpose of creating this platform is to connect musical artists with each other. </p>
            </div> -->
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">

                </div>
                <!-- End of Contact Form Holder -->
            </div>
        </div>
        <div class="section-content pt-0">
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">
                    <a href="./newtopic.php" class="btn btn-primary mb-3">
                        Create New Topic
                    </a>
                </h2>
            </div>

<table class="table" data-aos="fade-up">
  <thead>
    <th>S.No</th>
    <th>Topic Name</th>
    <th>Action</th>

  </thead>

  <tbody>

  <?php 
    $query1 = $query = mysqli_query($Connect, "SELECT * FROM `topic`");
     $i=1;
    while($row1=mysqli_fetch_array($query1) ){
        $topic_name = $row1['topic_name'];
        $topic_id = $row1['topic_id'];  
    ?>
    <tr>
        <td data-label="S.No"><?php echo $i ?></td>
        <td data-label="Name"><?php echo $topic_name ?></td>
        <td data-label="Age"> 
            <?php echo'<a href="./viewforum.php?topic_id='.$topic_id.'" class="btn btn-primary mb-3">';?>
             View
                </a>
         </td>
    </tr>
    <?php
        $i++;
    }
    ?>
    <!-- <tr>
      <td data-label="S.No">2</td>
      <td data-label="Name">Kamal</td>
      <td data-label="Age">23</td>
    </tr> -->
    

  </tbody>
</table>
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

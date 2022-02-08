<?php
include('./php/login.php');
@$session = $_SESSION['email_id'] ;
if(@$session == false){
    echo("<script>alert('Session Expired !! Please Login agian')</script>");
    echo("<script>window.location = './index.php'</script>");
}
$topic_id = $_GET['topic_id'];
$query = mysqli_query($Connect, "SELECT * FROM `message` WHERE `topic_id`='$topic_id'");


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Topic</title>
    <meta name="description" content="newtopic">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
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
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">CollabTune</h3>
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


</div>		<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(images/music123.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">View Forum</h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">View Forum</h2>
                <!-- replace viewforum by topic name use echo  -->
                   </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                <div class="row">
                        <div class="card mb-3" style="max-width: 540px;">

<?php
$i=1;
while($row =mysqli_fetch_array($query)){
    $email_id = $row['email_id'];
    $topic_name = $row['topic_name'];
    $topic_message = $row['topic_message'];
    $time = $row['time'];
    $message_id =$row['message_id'];
    $query1 =  mysqli_query($Connect, "SELECT * FROM `user` WHERE `email_id`='$email_id'");
    while($row1 =mysqli_fetch_array($query1)){
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
    }
?>
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $profile_img_display?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $artist_name_display ?></h5>
        <p class="card-text"><?php echo $topic_message ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $time ?></small></p>
        <?php
        if($email_id == $session){
            // <form method="post" name="delete">
            // <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="delete"> 
            // echo $message_id;
            // echo </button>
            // </form>


        }
        ?>
     </div>
    </div>
  </div>

<?php 
    $i++;
}
?>
</div>
</div>
                    <form method="post" name="contact-us" action="">

                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="topic_message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="add">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Contact Form Holder -->
          	</div>
	
</div>


<?php 
if(isset($_POST['delete'])){
    $query3 = mysqli_query($Connect,"DELETE FROM `message` WHERE `message_id`='$message_id'");
    if($query3==true){
        
        echo("<script>alert('Deleted Successfully')</script>");
        echo("<script>window.location = ''</script>");


    }
}
if(isset($_POST['add']))
  {
     $topic_message_new=$_POST['topic_message'];
     $message_id_new =uniqid();

    $currentDateTime = date('Y-m-d H:i:s');
     
       $query2 = "INSERT INTO `message`(`topic_id`, `email_id`, `topic_name`,`topic_message`,`time`,`message_id`) VALUES ('$topic_id','$session','$topic_name','$topic_message_new','$currentDateTime','$message_id_new')";
       $res2 = mysqli_query($Connect,$query2);
       if($query2==true){
        echo("<script>alert('posted successfully')</script>");
        echo("<script>window.location = ''</script>");
       }
   else{
       echo("<script>alert('An error has Ocurred ! Try Again')</script>");
       echo("<script>window.location = ''</script>");
   }
 
  }

?>
	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
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

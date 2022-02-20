<?php
 
 include('./Connect.php');
 include('login.php');
 @$session = $_SESSION['email_id'] or die('Login Again! error has occured') ;
 date_default_timezone_set('Asia/Kolkata');

 
 if(isset($_POST['create']))
  {
      $topic_id = uniqid() ;
     $topic_name= $_POST['topic_name'];
     $topic_message=$_POST['topic_message'];
     $message_id = uniqid();

    $currentDateTime = date('Y-m-d H:i:s');



     
     $query1 = " SELECT * FROM `user` WHERE `email_id` = '$session' ";
     $res1 = mysqli_query($Connect,$query1);
     $data = mysqli_fetch_assoc($res1);
     
 

       $query1 = "INSERT INTO `topic`(`topic_id`, `email_id`, `topic_name`) VALUES ('$topic_id','$session','$topic_name')";
       $res1 = mysqli_query($Connect,$query1);
       $query2 = "INSERT INTO `message`(`topic_id`, `email_id`, `topic_name`,`topic_message`,`time`,`message_id`) VALUES ('$topic_id','$session','$topic_name','$topic_message','$currentDateTime','$message_id')";
       $res2 = mysqli_query($Connect,$query2);
       if($query1==true && $query2==true){
        echo("<script>alert('Your topic has been succesfully created')</script>");
        echo("<script>window.location = '../forum.php'</script>");
       }
   else{
       echo("<script>alert('An error has Ocurred ! Try Again')</script>");
       echo("<script>window.location = '../forum.php'</script>");
   }
 
  }
 
 
 
 
 ?>
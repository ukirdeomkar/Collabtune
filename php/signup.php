<?php
 
 include('./Connect.php');
 
 if(isset($_POST['signup']))
  {
     $username= $_POST['username'];
     $email=$_POST['email'];
     $artist_name=$_POST['artist_name'];
     $contact=$_POST['contact']; 
     $link=$_POST['link'];                                                                                         
     $password=$_POST['password'];
     $genre = $_POST['genre'];
     $hash = password_hash($password, PASSWORD_DEFAULT);

     
     $query1 = " SELECT * FROM `user` WHERE `user_username` = '$username' ";
     $res1 = mysqli_query($Connect,$query1);
     $data = mysqli_fetch_assoc($res1);
 
     if(strcmp($data['user_username'],$username)==0)
     {
       echo("<script>alert('Username is Already Registred!')</script>");
       echo("<script>window.location = '../signup.php'</script>");
     }
     else if(strcmp($data['email_id'],$email)==0 )
     {
       echo("<script>alert('Email ID is Already Registred!')</script>");
       echo("<script>window.location = '../signup.php'</script>");
     }
     
     else
     {
       $query1 = "INSERT INTO `user`(`user_username`, `artist_name`, `email_id`, `contact`, `link` ,`user_password`,`genre`,`profile_pic`,`bio`) VALUES ('$username','$artist_name','$email','$contact','$link','$hash','$genre','','')";
       $res1 = mysqli_query($Connect,$query1);
   
       echo("<script>alert('You have Sucessfully Registred!')</script>");
       echo("<script>window.location = '../index.php'</script>");
     }
  }
  else
  {
     echo("<script>alert('Undefined action!')</script>");
     echo("<script>window.location = '../signup.php'</script>");
  }
 
 
 
 
 ?>

<?php	
session_start();        
include('Connect.php');
@$session = $_SESSION['email_id'] or die("SESSION Expired !! Login Again");

$query1 = " SELECT * FROM `user` WHERE `email_id` = '$session' ";
$res1 = mysqli_query($Connect,$query1);
$data = mysqli_fetch_assoc($res1);
$username_default = $data['user_username'];
$user_password = $data['user_password'];
$artist_name_default = $data['artist_name'];
$contact_default = $data['contact'];
$link_default = $data['link'];
$genre_default = $data['genre'];



$username_new = $_POST['username'];
$artist_name_new = $_POST['artist_name'];
$contact_new = $_POST['contact'];
$link_new = $_POST['link'];
$genre_new = $_POST['genre'];
$password_check =$_POST['password'];

if($username_new == ''){
$username_new =$username_default;
}
if($artist_name_new==''){
    $artist_name_new =$artist_name_default;
}
if($contact_new==''){
    $contact_new =$contact_default;
}
if($link_new==''){
    $link_new =$link_default;
}
if($genre_new==''){
    $genre_new =$genre_default;
}

if(isset($_POST['edit_profile'])){
    echo $artist_name_new .'<br>';
    echo $username_new.'<br>';
    echo $contact_new.'<br>';
    echo $link_new.'<br>';
    echo $genre_new.'<br>';

    if($user_password == $password_check){
        echo 'can be editted';
        $query = mysqli_query($Connect,"UPDATE `user` SET `user_username`='$username_new',`artist_name`='$artist_name_new',`contact`='$contact_new',`link`='$link_new',`genre`='$genre_new' WHERE `email_id` = '$session'");
        if($query == true){
            echo("<script>alert('Profile Updated Succesfully')</script>");

            echo("<script>window.location = '../account.php'</script>"); 

        }

    }
    else if($password_check==''){
        echo("<script>alert('Please Enter Your Password')</script>");
        echo("<script>window.location = '../edit_account.php'</script>"); 


    }
    else{
        echo("<script>alert('Password is Incorrect')</script>");
        echo("<script>window.location = '../edit_account.php'</script>"); 


    }

}




?>
<?php	
session_start();        
include('Connect.php');

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query1 = " SELECT * FROM `user` WHERE `email_id` = '$email' ";
    $res1 = mysqli_query($Connect,$query1);
	$data = mysqli_fetch_assoc($res1);
	$hash = $data['user_password'];



	if(mysqli_num_rows($res1)>0)
	{


		$verify = password_verify($password, $hash);

		if($verify)
		{   
            // $_SESSION['user_username']=$data['username'];
            // $_SESSION['name']  =  $data['name'];
            // $_SESSION['phonenumber']=$data['phonenumber'];
            $_SESSION['email_id']=$data['email_id'];

            echo("<script>window.location = '../home.php'</script>");
		}
		else
		{
            echo("<script>alert('Password is Wrong! Please try again!')</script>");
			echo $hash;
            echo("<script>window.location = '../index.php'</script>");
		}
	}
	else
	{
		echo("<script>alert('Please Sign Up! Username Not Found!')</script>");
        echo("<script>window.location = '../index.php'</script>");
	}
}
// else
// {
//     echo("<script>alert('Undefined Action!')</script>");
//     echo("<script>window.location = '../index.php'</script>");
// }

?>
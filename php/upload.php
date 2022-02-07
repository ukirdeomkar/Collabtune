<?php
// Include the database configuration file
include('./Connect.php');
include('./login.php');
$session = $_SESSION['email_id'];
// $statusMsg = '';

if(isset($_POST["Upload"])){
    $a = 'aimage';
    $image = $_FILES[$a]["name"];
    $tempname = $_FILES[$a]["tmp_name"]; 
    $folder = "uploads/".$image;
    move_uploaded_file($_FILES[$a]["tmp_name"],$folder);    
    $result = mysqli_query($Connect, "SELECT * FROM user");

    $q3=mysqli_query($Connect,"UPDATE `user` SET `profile_pic`='$image' WHERE `email_id`='$session'");
    
    echo("<script>window.location = '../edit_account.php'</script>"); 
}


// File upload path
// $targetDir = "uploads/";
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// if(isset($_POST["Upload"]) && !empty($_FILES["file"]["name"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array($fileType, $allowTypes)){
//         // Upload file to server
//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
//             // Insert image file name into database
//             $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
//             if($insert){
//                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
//                 echo("<script>window.location = '../account.php'</script>");

//             }else{
//                 $statusMsg = "File upload failed, please try again.";
//             } 
//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }

// // Display status message
// echo $statusMsg;
?>
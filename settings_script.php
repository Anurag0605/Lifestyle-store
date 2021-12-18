<?php
include './include/common.php';
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$newpasswordre=$_POST['newpasswordre'];

$email = $_SESSION['email'];

$select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$oldpassword'";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
$rows = mysqli_num_rows($select_query_result);

if ($rows >= 0 && $newpassword==$newpasswordre){
    // $success = "<span class='green'>Password Changed</span>";
    $update_query = "UPDATE users SET password = '$newpassword' WHERE email = '$email'";
    $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
    // echo "Your password has been reset successfully.";
    // header('location:settings.php');
    echo "Your password has been reset successfully.";
}else{
   
    // header('location:settings.php');
    echo "Passswords do not match.";
}
   





?>
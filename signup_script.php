<?php
include './include/common.php';

$email=$_POST['email'];
$email = mysqli_real_escape_string($con , $email);

$password=$_POST['password'];
$password = mysqli_real_escape_string($con , $password);
// $password = md5($password);

$username=$_POST['name'];
$username = mysqli_real_escape_string($con , $username);

$number=$_POST['number'];
$number = mysqli_real_escape_string($con , $number);

$city=$_POST['city'];
$city = mysqli_real_escape_string($con , $city);

$select_query = "SELECT * from users WHERE email = '$email'";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
$select_rows = mysqli_num_rows($select_query_result);
if($select_rows!=0){
    echo "Email Already Exists";
   
}
else{
$user_resgistration_query="INSERT INTO `users` ( `name`, `email`, `password`, `number`, `city`) VALUES ( '$username', '$email', '$password', '$number', '$city');";
$user_resgistration_submit=mysqli_query($con,$user_resgistration_query)
or die (mysqli_error($con));
md5($password);
$user_id=mysqli_insert_id($con);
$_SESSION['user_id'] = $user_id;
$_SESSION['email'] = $email;
header('location: products.php');


    }


    







?>
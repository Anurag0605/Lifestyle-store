<?php

include './include/common.php';
$email = $_POST['email'];
$email = mysqli_real_escape_string($con , $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con , $password);
// $password = md5($password);

  $Select_query="SELECT user_id, email from users where email ='$email' AND password ='$password'" ;
$Select_query_result= mysqli_query($con,$Select_query) or die (mysqli_error($con));
$num= mysqli_num_rows($Select_query_result);

if ($email=="") {
  echo "Fill your credentials";
}
else {


if ($num!= 0) {
 
  
  $row = mysqli_fetch_array($Select_query_result);
    $_SESSION['email']= $email;
    $_SESSION['user_id']= $row['user_id'];
    header('location: products.php');
 
  }
  else{
    echo "Invalid credentials!!";
  }}
?>



<?php
 if (isset($_SESSION['email'])) {
       header('location: products.php'); 
      }
else{
session_start();
session_unset();
session_destroy();
header('location: index.php'); 
}
?>
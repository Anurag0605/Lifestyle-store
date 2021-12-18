
<?php
include './include/common.php';
// include 'login_submit.php';

?>
<?php
if (isset($_SESSION['email'])) {
   header('location: products.php'); 
  }
//   else{
//     echo "login to continue";
//   }
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle Store || Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
          .btn{
                
                text-align: center;
                
            }
            .container-fluid{
                
                text-align: center;
                margin: auto;
            }
            .col-xs-4{
                margin-left: 500px;
                justify-content: center;

            }
            footer{
            /* padding: 2px 0; */
           background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            justify-content: center;
            text-align: center;
            margin-top: 230px;
            bottom: 0;

        }
        .container-fluid{
            margin-top: 100px;
        }
        .logo{
            color: rgb(161, 165, 168);
            text-decoration: none;
        }
        .logo:hover{
            color:azure;
            text-decoration: none;

        }

    </style>
  </head>
  <body>
  <?php
include './include/header.php';
    ?>
    <?php
    
  


?>
    <div class="container-fluid">
        <div class="row">
            <h1>Sign Up</h1>
            <form method="POST" action="signup_script.php">
            <div class="col-xs-4">
                <div class="form-group">

                <input class="form-control" name="name" type="text" placeholder=" Name" >
            </div>
                <div class="form-group">

                <input class="form-control" name="email" type="email" placeholder=" E-mail" >
            </div>
                <div class="form-group">
 
                <input class="form-control" name="password" type="password" placeholder=" password" >
            </div>
                <div class="form-group">

                <input class="form-control" name="number" type="number" placeholder=" Contact numaber" >
            </div>
                <div class="form-group">

                <input class="form-control" name="city" type="text" placeholder=" City Name"  >
            </div>
           <a href="login.php"> <button class="btn btn-success">SUBMIT</button></a>
            </div>
            
        </form>
                
        </div>
    </div>
    <?php
include './include/footer.php';
    ?>
  </body>
</html>
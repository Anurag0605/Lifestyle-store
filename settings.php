
<?php
include './include/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php'); 
   }

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle Store || Settings</title>
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
                /* margin-top: 100px; */
            }
            .container-fluids{
                
                text-align: center;
                margin: auto;
                margin-top: 100px;
            }
            .col-xs-4{
                margin-left: 500px;
                justify-content: center;

            }
            .logo{
            color: rgb(161, 165, 168);
            text-decoration: none;
        }
        .logo:hover{
            color:azure;
            text-decoration: none;

        }
        footer{
            padding: 10px 0;
           background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            justify-content: center;
            text-align: center;
            bottom: 0px;
            position: relative;
            

        }
        
        .row{
            margin:auto;
            
        }
        .text{
            
            align-items: center;
            justify-content:center;
            min-height: calc(85vh);
        }
    </style>
  </head>
  <body>
  <?php
include './include/header.php';
?>

       <div class="container-fluids ">
           <div class="row">
               <div class="col-xs-4 text">
               <h1>Change Password</h1>
               <form action="settings_script.php" method="POST" >
                <div class="form-group">

                    <input class="form-control" type="password" name="oldpassword" placeholder=" Old-password" >
                </div>
                <div class="form-group">

                    <input class="form-control" type="password" name="newpassword" placeholder="Enter new password" >
                </div>
                <div class="form-group">

                    <input class="form-control" type="password" name="newpasswordre" placeholder=" Re-Enter new password" >
                </div>
                <a href="#"> <button class="btn btn-success">Change</button></a>
            

               </form>
           </div>
       </div></div>
       <?php
include './include/footer.php';
    ?>
  </body>
</html>
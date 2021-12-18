
 <?php
 
 include './include/common.php';

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle store|| Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
         
            .panel-footer{
                margin-top: 10px;
            }
            footer{
            padding: 10px 0;
           background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            justify-content: center;
            text-align: center;
            margin-top: 220px;

        }
        .panelc{
            margin-top: 80px;
        }
        .logo{
            color: rgb(161, 165, 168);
            text-decoration: none;
        }
        .logo:hover{
            color:azure;
            text-decoration: none;

        }
        .btn a{
            color: azure;
            text-decoration: none;
        }
        .pt{
            margin-left: 10px;
            bottom: 0;
           
        }

    </style>
  </head>
  <body>
   
  <?php
include './include/header.php';
?>
    <div class="container panelc">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Login</h1>

                    </div>
                    <p class="text-warning">
                       <em class="pt">Login to make a purchase.</em> 
                    </p>
                    
                    <form method="POST" action="login_submit.php" >
                        <div class=" panel-body">
                        <div class="form-group">

                            <input class="form-control" name="email" type="email" placeholder="Enter Your E-mail" >
                        </div>
                            <div class="form-group">
        
                            <input class="form-control" name="password" type="password" placeholder="Enter Your E-mail password" >
                        </div>
                        <a href="#"><button class="btn btn-success">SUBMIT</button></a>
                        <div class="panel-footer">
                            <p>Don't have an account?</p>
                            <a href="signup.php"> Register

                            </a>
                    </div>
                </div>
                    
                    </div>
                    
                        </div>
                    
                    </div>
                   

                        </div>
                    
                </form>

                </div>
                
            </div>
        </div>
    </div>
    <?php
include './include/footer.php';
    ?>

  </body>
</html>
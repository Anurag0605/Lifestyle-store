
<?php
include './include/common.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle Store || Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
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
            bottom: 0;
            

        }

    </style>
  </head>
  <body>
   <?php 
 include './include/header.php';
   require './include/check_if_added.php';
   $user_id = $_SESSION['user_id'];
   if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
else{

}
  
   ?>
       <div class="container">
           <div class="jumbotron">
           <?php
           if(isset($_SESSION['email'])){
            echo "<h3 class='text-center'>Welcome $email</h3>";
        }
                      
                    ?>
               <h1>Welcome to our Lifestyle Store!!!</h1>
               <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place. </p>
              
           </div>
           
          <div class="row">
              <div class="text-center">
                  <div class="col-md-3 col-sm-6 thumbnail">
                    <a href="#"><img src="3.jpg" alt=""></a>  
                    <div class="caption">
                        <h3>SonyDSLR</h3>
                        <p>Price Rs. 50000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(1)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                       

                      </div>
                      </div>
                  <div class="col-md-3 col-sm-6 thumbnail">
                     <a href="#"> <img src="2.jpg" alt=""></a>
                     <div class="caption">
                        <h3>SonyDSLR</h3>
                        <p>Price Rs. 40000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(2)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>
                  <div class="col-md-3 col-sm-6 thumbnail">
                      <a href="#"><img src="4.jpg" alt=""></a>
                      <div class="caption">
                        <h3>OlympusDSLR</h3>
                        <p>Price Rs. 80000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(3)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>
                  <div class="col-md-3 col-sm-6 thumbnail">
                     <a href="#"> <img src="5.jpg" alt=""></a>
                     <div class="caption">
                        <h3>CanonEOS</h3>
                        <p>Price Rs. 36000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(4)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>

                  </div>
                  <div class="col-md-3 col-sm-6 thumbnail">
                    <a href="#"><img src="12.jpg" alt=""></a>  
                    <div class="caption">
                        <h3>FaberLuba#111</h3>
                        <p>Price Rs. 18000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(5)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>
                      <div class="row2">
                  <div class="col-md-3 col-sm-6 thumbnail">
                     <a href="#"> <img src="9.jpg" alt=""></a>
                     <div class="caption">
                        <h3>TitanModel#301</h3>
                        <p>Price Rs. 13000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(6)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>
                  <div class="col-md-3 col-sm-6 thumbnail">
                      <a href="#"><img src="10.jpg" alt=""></a>
                      <div class="caption">
                        <h3>TitanModel#201</h3>
                        <p>Price Rs. 3000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(7)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>
                  <div class="col-md-3 col-sm-6 thumbnail">
                     <a href="#"> <img src="11.jpg" alt=""></a>
                     <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price Rs. 8000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(8)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                    </div>

                      </div>
                    </div>
                    <div class="row3">
                        <div class="text-center">
                            <div class="col-md-3 col-sm-6 thumbnail">
                              <a href="#"><img src="6.jpg" alt=""></a>  
                              <div class="caption">
                                  <h3>LuisPhil</h3>
                                  <p>Price Rs. 1000.00</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(9)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                              </div>
          
                                </div>
                            <div class="col-md-3 col-sm-6 thumbnail">
                               <a href="#"> <img src="8.jpg" alt=""></a>
                               <div class="caption">
                                  <h3>H&W</h3>
                                  <p>Price Rs. 800.00</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(10)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                              </div>
          
                                </div>
                            <div class="col-md-3 col-sm-6 thumbnail">
                                <a href="#"><img src="13.jpg" alt=""></a>
                                <div class="caption">
                                  <h3>JohnZok</h3>
                                  <p>Price Rs. 1500.00</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(11)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                              </div>
          
                                </div>
                            <div class="col-md-3 col-sm-6 thumbnail">
                               <a href="#"> <img src="14.jpg" alt=""></a>
                               <div class="caption">
                                  <h3>Jhalsani</h3>
                                  <p>Price Rs. 1300.00</p>
                                  <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                    } else { 
                     if (check_if_added_to_cart(12)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { 
                         ?>
                      <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                      <?php }
                     } 
                     ?>
                              </div>
          
                                </div>
          
                            </div>
                       

                  </div>

              </div>
          </div>
        <!-- </form> -->
       </div>
       <?php
include './include/footer.php';
    ?>
   


  </body>
</html>
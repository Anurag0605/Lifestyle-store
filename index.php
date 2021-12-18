
<?php

include './include/common.php';

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle Store</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
      .logo {
        color: rgb(161, 165, 168);
        text-decoration: none;
      }
      .logo:hover {
        color: azure;
        text-decoration: none;
      }
      #banner-image {
        padding-top: 75px;
        padding-bottom: 50px;
        text-align: center;
        color: #f8f8f8;
        background: url(intro-bg_1.jpg) no-repeat center center;
        background-size: cover;
      }
      #banner-content {
        position: relative;
        padding-top: 6%;
        padding-bottom: 6%;
        margin-top: 12%;
        margin-bottom: 12%;
        background-color: rgba(0, 0, 0, 0.7);
        max-width: 660;
        justify-content: center;
      }
      footer {
        padding: 10px 0;
        background-color: #101010;
        color: #9d9d9d;
        bottom: 0;
        width: 100%;
        justify-content: center;
        text-align: center;
        
      }
      .row{
          margin-top: 10px;
          overflow: visible;
      }
      .thumbnail{
        margin: 45px;
        background-color:#C9F6F6;
        margin-left:50px;
      }
      .indexrow{
        /* display: flex; */
        /* align-items: center; */
        justify-content: center;
        /* flex-direction: row; */
        /* min-height: calc(85vh); */
        
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
    <div id="banner-image">
      <div class="container">
        <div id="banner-content">
          <h1>We sell Lifestyle</h1>
          <p>Flat 40% OFF on premium brands</p>
          <a href="products.php" class="btn btn-danger btn-lg active">
            Shop Now</a
          >
        </div>
      </div>
    </div>
    <div class="row indexrow">
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



                      </div>
                      </div>
                      </div>
                      </div>
    
    <?php
include './include/footer.php';
    ?>
   
    
  </body>
</html>

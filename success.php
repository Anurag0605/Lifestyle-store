
<?php
include './include/common.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle Store || Success</title>
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
        .Final{
           
            margin-top: 90px;
            font-size: 40px;
            justify-content: center;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            font-weight: 800;
            color: seagreen;
        }
        footer{
            padding: 10px 0;
           background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            width: 100%;
            justify-content: center;
            text-align: center;
            margin-top: 460px;
            bottom: 5px;

        }
    </style>
  </head>
  <body>
  <?php
  include './include/header.php';
       ?>
       <div class="Final">
      <p> Your order is confirmed. Thank You for Shopping With Us!!!</p>
       <a href="products.php"> Click here</a> to purchase any other item.</div>
       <?php
include './include/footer.php';
    ?>
  </body>
</html>
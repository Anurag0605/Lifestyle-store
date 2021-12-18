
<?php
include './include/common.php';

?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Lifestyle store||Cart</title>
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
        .table{
            margin-top: 100px;
            /* margin-left: 500px; */
            /* margin-right: 500px; */
            /* padding: 400px; */
            
            width:500px;
            /* justify-content: center; */
            text-align: center;
            margin-left: 500px;
            height: 150px;
            border: 2px solid black;
            
        }
        footer{
            padding: 10px 0;
           background-color: #101010;
            color:#9d9d9d;
         margin-top: 425px;
            width: 100%;
            justify-content: center;
            text-align: center;
            bottom: 0;

        }
        
        tr{
            border:2px solid black ;

        }
        th{
            border: 2px solid black;
        }
        
        .table{
            
            margin:auto;
            margin-top: 150px;
            /* min-height: calc(85vh); */
        }

    </style>
  </head>
  <body>
<?php
include './include/header.php';
?>
       <div class="thr">
       <table class="table table-bordered table-hover table-responsive">
       <?php
       $sum = 0;
       $id='';
       $user_id = $_SESSION['user_id'];
       $query = "SELECT items.price AS price, items.item_id, items.name AS name FROM user_items JOIN items ON user_items.item_id = items.item_id WHERE user_items.user_id='$user_id' and status='Added to cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));

        ?>
         <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["price"];                                    
                    $id = $row["item_id"];
                    // $name=$row["name"];
                    echo "<tr><td>" . "#" . $row["item_id"] . "</td><td>" . $row['name'] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['item_id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        
        // else {
        //     echo "Add items to the cart first!";
        // }
        ?>
        <?php
        ?>
           <!-- <tbody> -->
               <!-- <tr>
                   <th>Item Number</th>
                   <th>Item Name</th>
                   <th>Price</th>
                   <th></th>
                   <tr><td></td><td></td><td></td><td></td></tr>
                   <tr><td></td><td>Total</td><td>Rs. 0/-</td><td><a href="success.php"> <button class="btn btn-primary">Confirm Order</button></a></td></tr> -->
                   
                    
                   
               <!-- </tr>
           </tbody> -->
       </table></div>
       <<?php
      include './include/footer.php';
      ?>
       
  </body>
</html>
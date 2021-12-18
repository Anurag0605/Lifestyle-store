
<?php
     function check_if_added_to_cart($item_id){
        include './include/common.php';
        
        $user_id=$_SESSION['user_id'];
    // $_SESSION['item_id']=$item_id;
        
     $query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added To Cart'";

        $query_result = mysqli_query($con, $query);
        $num_rows=mysqli_num_rows($query_result);
        
     if( $num_rows >= 1){
         return true;
     }
        else{
         return FALSE;
     }
 }
    ?>

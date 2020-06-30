<?php
function  check_if_added_to_cart($item_id)
{
    $con= mysqli_connect("localhost", "root", "", "e-cart")or die(mysqli_error($con));
    $user_id = $_SESSION['id'];
    $select_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
    $result = mysqli_query($con, $select_query);
    $no_of_row = mysqli_num_rows($result);
    
    if ($no_of_row>=1) 
    {
        return 1;
    }
    else 
    {
        return 0;
    }
}
?>

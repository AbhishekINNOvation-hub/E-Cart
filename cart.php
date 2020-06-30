<?php 
require  'includes/common.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            
            .xmp
            {
                background-color: white;
            }
            img
            {
                height: 100px;
                width: 150px;
            }
        </style>
    </head>
    <body>
 
     <?php        require 'includes/header.php';
                           $user_id = $_SESSION['id'];
                  $select_query = "SELECT ui.id,ui.item_id,i.name,i.price,i.image FROM users_items ui INNER JOIN items i ON i.id = ui.item_id WHERE user_id = '$user_id' AND status = 'Added to cart'";
                  $result = mysqli_query($con, $select_query);
                  $sum=0;
                  $i=0;
        echo ';<div class="container head">
            <div class="col-md-8 xmp">
            
                <h3>CART('.mysqli_num_rows($result).')</h3>
                <hr>';
                     
                  if (mysqli_num_rows($result)==0) {
                      echo "Add item to cart first!";
                  }
                  else
                  {   
                     $sum=0;
                     
                      while ($row=mysqli_fetch_array($result))
                      {
                          $i++;
                          $sum += $row['price'];
                          $id = $row['item_id'].',';
                          
                        
                          $_SESSION['item_id'] = $row['item_id'];
                echo '<div class="row">
                <div class="col-md-3">
                    <img src="'.$row['image'].'">
                </div> 
                <div class="col-md-8 col-md-offset-1 xmp">
                    <h4>'.$row['name'].'</h4>
                    <h4><b>Price: Rs '.$row['price'].'</b></h4>
                    <a href="cart-remove.php?id='.$row['item_id'].'" class="remove_item_link"> Remove</a>
                </div>
                </div>';
                      }
                  }
                echo'
            </div>
            <div class="col-md-3 col-md-offset-1 xmp">
                <h3 style="color: #878787;">PRICE DETAIL</h3>
                <hr>
                <h4>Price('.$i.')  Rs - '.$sum.'</h4>';
                if (mysqli_num_rows($result)==0) {
                      echo '<h4>Delivery Fee Rs.0</h4>';
                  }
 else {
                  echo '<h4>Delivery Fee  Rs - 540</h4>
                <hr>';
                  $sum = $sum+540;
 }
                
                echo '<h3>TOTAL Rs - '.$sum.'</h3>
                     <h3><a href="success.php"><button type="button" class="btn btn-primary btn-block">Confirm Order</button></a></h3>
            </div>
            
        </div>';?>
        <div class="head">
        <?php
                require 'includes/footer.php';
                ?>
        </div>
    </body>
</html>
            


<?php
   require 'includes/common.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
    ?>
<html>
    <head>
    <title>E-CART</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <?php
            include 'includes/header.php';
        ?>  
        <?php
        
        $user_id=$_SESSION['id'];
        $update_query= "UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
        $query_result= mysqli_query($con, $update_query);
        ?>
        <div class="jumbotron success-style"> 
            <center>
            <h1>Your order is confirmed.</h1> 
            <p>Thank you for shopping with us. <a href="home1.php.php">Click here</a> to purchase any other item.<p>
            </center>   
        </div>
        <?php
            include 'includes/footer.php';
        ?>   
    </body>
</html>

<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
.round {
  border-radius: 50%;
}
.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #222;
  color: white;
}
        </style>
    </head>
    <body>
      <?php    include 'includes/header.php';
              require 'includes/if-added.php';
              ;?>  
        <div class="container xml" style="margin-top: 80px;">
        <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/10.jpg"></a>
                        <div class="caption">
                        <center>
                        <h4>One Plus 138.8 cm (55 inch) Ultra HD (4K) QLED Smart TV, Q1 55Q1</h4>
                        <h4><b>Price: Rs 69,899</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(10)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=10"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/11.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Motorola 109cm (43 inch) Ultra HD (4K) LED Smart Android TV with Wireless Gamepad  (43SAUHDM)</h4>
                        <h4><b>Price: Rs 21,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(11)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=11"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/12.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Mi 4A Pro 108 cm (43) Full HD LED Smart Android TV With Google Data Saver</h4>
                        <h4><b>Price: Rs 21,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(12)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=12"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
        </div>
        <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/13.jpg"></a>
                        <div class="caption">
                        <center>
                        <h4>LLOYD 163 cm (65 inch) Ultra HD 4K LED Smart TV, L65U1Y0IV</h4>
                        <h4><b>Price: Rs 69,990</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(13)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=13"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/14.jpg"></a>
                        <div class="caption">
                        <center>
                        <h4>LLOYD 163 cm (65 inch) Ultra HD 4K LED Smart TV, L65U1Y0IV</h4>
                        <h4><b>Price: Rs 1,58,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(14)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=14"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/15.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Kodak X900 80cm (32 inch) HD Ready LED TV  (32HDX900s)</h4>
                        <h4><b>Price: Rs 7,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(15)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=15"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
        </div>
        <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/16.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>CloudWalker 139cm (55 inch) Ultra HD (4K) Curved LED Smart TV  (CLOUD TV 55SU-C)</h4>
                        <h4><b>Price: Rs 84,500</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(16)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=16"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/17.jpg"></a>
                        <div class="caption">
                        <center>
                        <h4>CloudWalker 139cm (55 inch) Ultra HD (4K) Curved LED Smart TV  (CLOUD TV 55SU-C)</h4>
                        <h4><b>Price: Rs 80,990</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(17)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=17"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/18.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>BPL Stellar Series 80cm (32 inch) HD Ready LED Smart TV  (T32SH30A)</h4>
                        <h4><b>Price: Rs 9,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(18)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=18"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
        </div>
                         <center>
                             <a href="home1.php" class="previous round" style=" text-decoration: none;
  display: inline-block;
  padding: 8px 16px;">1</a>
  <a href="home2.php" class="next round"style=" text-decoration: none;
  display: inline-block;
  padding: 8px 16px;">2</a>
             </center>
        </div>
   
    <?php
           require 'includes/footer.php';
        ?>        
</html>

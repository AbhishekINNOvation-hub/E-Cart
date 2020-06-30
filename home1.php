<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-CART</title>
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
        <div class="container" style="margin-top: 90px; margin-bottom: 50px;">
        <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/1.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Thomson UD9 124cm (50 inch) Ultra HD (4K) LED Smart TV  (50TH1000)</h4>
                        <h4><b>Price: Rs 30,000</b></h4>
                        </center>
                             <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(1)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=1"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/2.jpg"></a>
                        <div class="caption">
                        <center>
                        <h4>TCL 215.9 cms (85 Inch) Ultra HD (4K) Android TV Smart LED TV 85P8M</h4>
                        <h4><b>Price: Rs 1,99,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(2)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=2"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/3.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Sansui Pro View 80cm (32 inch) HD Ready LED TV with WCG  (32VNSHDS)</h4>
                        <h4><b>Price: Rs 8,499</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(3)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=3"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
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
                            <a href="#"><img src="img/4.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Samsung Series 7 138cm (55 inch) Ultra HD (4K) Curved LED Smart TV  (55MU7500)</h4>
                        <h4><b>Price: Rs 2,06,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(4)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=4"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/5.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Samsung 163cm (65 inch) Ultra HD (4K) LED Smart TV  (UA65NU7090KXXL)</h4>
                        <h4><b>Price: Rs 89,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(5)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=5"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/6.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Samsung 123cm (49 inch) Ultra HD (4K) Curved LED Smart TV  (49KU6570)</h4>
                        <h4><b>Price: Rs 89,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(6)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=6"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
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
                            <a href="#"><img src="img/7.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Samsung 80cm (32 inch) HD Ready LED TV  (32J4003)</h4>
                        <h4><b>Price: Rs 14,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(7)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=7"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/8.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Philips 164cm (65 inch) Ultra HD (4K) LED Smart TV  (65PUT6703S94)</h4>
                        <h4><b>Price: Rs 79,999</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(8)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=8"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="#"><img src="img/9.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Panasonic 109cm (43 inch) Full HD LED Smart TV  (TH-43CS400DX)</h4>
                        <h4><b>Price: Rs 50,666</b></h4>
                        </center>
                            <?php if(!isset($_SESSION['email']))
                        {?>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        <?php 
                        }else{
                        if (check_if_added_to_cart(9)) {

                             echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled >Added to cart</button></a>';
                        }else{?>
                        <a href="cart-add.php?id=9"><button type="button" class="btn btn-primary btn-block" >Add to cart</button></a>
                        <?php
                        }
                        }?>
                        </div>
                        </div>
                    </div>
        </div>
             <center>
                 <a href="home1.php" class="previous round" style="
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;">1</a>
  <a href="home2.php" class="next round"style="
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;">2</a>
             </center>
        </div>
   
    <?php
           require 'includes/footer.php';
        ?>    
    </body>
</html>



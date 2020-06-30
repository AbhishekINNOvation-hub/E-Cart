<?php 
require  'includes/common.php';
 if (isset($_SESSION['email'])) {
 header('location: home1.php');
 
 }?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-CART</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              <script src="bootstrap/js/bootstrap.min.js"></script>
              <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            require 'includes/header.php';
         ?>
        <div id="myCarousel" class="carousel slide head" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <center>
              <img src="img/ss1.jpg" alt="image" style="width:550px;height: 275px;">
          </center>
      </div>

      <div class="item">
          <center>
              <img src="img/ss2.jpg" alt="image" style="width:550px;height:275px;">
          </center>
      </div>
    
      <div class="item">
          <center>
              <img src="img/ss3.jpg" alt="image" style="width:550px;height:275px;">
          </center>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        <div class="container "style="margin-top: 30px;">
           
        <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                        <a href="#"><img src="img/1.jpeg"></a>
                        <div class="caption">
                        <center>
                        <h4>Mi 4A Pro 108 cm (43) Full HD LED Smart Android TV With Google Data Saver</h4>
                        <h4><b>Price: Rs 21,999</b></h4>
                        </center>
                        <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                        <a href="#"><img src="img/2.jpg"></a>
                        <div class="caption">
                        <center>
                            <h4>Motorola 109cm (43 inch) Ultra HD (4K) LED Smart Android TV with Wireless Gamepad </h4>
                            <h4><b>Price: Rs 21,999</b></h4>
                        </center>
                        <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                        <a href="#"><img src="img/3.jpeg"></a>
                        <div class="caption">
                        <center>
                            <h4>Samsung 80cm (32 inch) HD Ready LED TV (32J4003)</h4>
                            <h4><b>Price: Rs 14,999</b></h4>
                        </center>
                        <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
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
                            <h4>Sansui Pro View 80cm (32 inch) HD Ready LED TV with WCG  (32VNSHDS)</h4>
                            <h4><b>Price: Rs 8,499</b></h4>
                        </center>
                        <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                        <a href="#"><img src="img/5.jpeg"></a>
                        <div class="caption">
                        <center>
                            <h4>BPL Stellar Series 80cm (32 inch) HD Ready LED Smart TV  (T32SH30A)</h4>
                            <h4><b>Price: Rs 9,999</b></h4>
                        </center>
                        <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                        <a href="#"><img src="img/6.jpeg"></a>
                        <div class="caption">
                        <center>
                            <h4>Kodak X900 80cm (32 inch) HD Ready LED TV  (32HDX900s)</h4>
                            <h4><b>Price: Rs 7,999</b></h4>
                        </center>
                        <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="button" class="btn btn-primary btn-block" >Buy Now</button></a>
                        </div>
                        </div>
                    </div>
        </div>
        </div>    

        <?php
           require 'includes/footer.php';
        ?>
    </body>
</html>

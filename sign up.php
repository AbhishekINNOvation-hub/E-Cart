
<!DOCTYPE html>
<html>
    <head>
        <title>sing up||E-CART</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            img
            {
                height: 400px;
                width: 600px;
                margin-top: 25px;
            }
        </style>
        
    </head>
    <body>
        <?php   require 'includes/header.php';?>
        
        <div class="container">
            <div class="row rowstyle">
                <div class="col-xs-6">
                    <img src="img/sginup.jpg">
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                    <h1> SIGN UP</h1>
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                <?php if(isset($_GET['name_error'])){echo $_GET['name_error'];}?>
                                </div>
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                                <?php if(isset($_GET['email_error'])){echo $_GET['email_error'];}?>
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{8,}">
                                <div>
                                    <?php if(isset($_GET['password_error'])){echo $_GET['password_error'];}?>
                                </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}">
                                    <?php if(isset($_GET['contact_error'])){echo $_GET['contact_error'];}?>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                                <?php if(isset($_GET['city_error'])){echo $_GET['city_error'];}?>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                                
                                <div class="form-group">
                                    <?php if(isset($_GET['blankerror'])){echo $_GET['blankerror'].'<br>';}?>
                                <button type="submit" class="btn btn-primary" style="background-color: #222222; border: #222222">Submit</button>
                               </form>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php        require 'includes/footer.php';?>
    </body>
</html>


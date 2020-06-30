        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">E-CART</a>
                <button type="button" class="navbar-toggle"
                        data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                <?php
                if (!isset($_SESSION['email'])) {?>
                    <li><a href="sign up.php" class="glyphicon glyphicon-user">Sing Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal" class="glyphicon glyphicon-log-in">Login</a></li>
 
                    <li><a href="about.php" class="glyphicon glyphicon-th-list">About Us</a></li>
                    <li><a href="contact.php" class="glyphicon glyphicon-phone">Contact Us</a></li>
                <?php } else {?>
                
                    <li><a href="cart.php" class="glyphicon glyphicon-user">cart</a></li>
                    <li><a href="setting.php" class="glyphicon glyphicon-cog">setting</a></li>
                    <li><a href="logout.php" class="glyphicon glyphicon-log-in">Logout</a></li
                <?php }?>
                </ul>
            </div>
            </div>
      
                
        </nav>
               <div class="modal fade" role="dialog" id="loginmodal">
                   <div class="modal-dialog"><br><br><br>
                       <div class="panel panel-primary" style="border: #222222; background-color: #ddd;">
                            <div class="panel-heading" style="background-color: #222222">
                                <button type="button" class="close" data-dismiss="modal"  style=" background-color: whitesmoke;">&times;</button>
                                <center><h1> LOGIN</h1></center>
                                 
                            </div>
                        <div class="panel-body">
                            <p>Login to make a Purchase</p>
                            <form method="POST" action="login_submit.php">
                                
                                <input type="email" name="email" class="form-control"  placeholder="email"><br>
                                <input type="password" name="password" class="form-control"  placeholder="password" ><br>
                                <button type="submit" class="btn btn-primary" style="background-color: #222222; border: #222222;" >Login</button>
                            </form>
                                  
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="sign up.html">Register</a></p>
                        </div>
                    </div>
                   </div>
               </div>
    


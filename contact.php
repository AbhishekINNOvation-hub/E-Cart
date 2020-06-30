<html>
    <head>
        <title>contact us||E-CART</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
              <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
              <script src="bootstrap/js/bootstrap.min.js"></script>
              <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        <?php include 'includes/header.php';?>
        <div class="container " style="margin-top: 90px; margin-bottom: 50px;">
            <div class="row">
                <div class="col-xs-8">
                    <h3><b>LIVE SUPPORT</b></h3>
                    <h4>24 hours| 7 days a week | 365 days a Year Live Technical Support</h4>
                    <p>It is a long established fact that the reader will be distracted by the readable
                    content of a page when looking at its layout.The point of using Loren Ipsum is that it 
                    has a more-or-less normal distribution of letters.There are many variations of passages
                    of Loren Ipsum available, but the majority have suffered alteration in some form,by
                    injected humour,or randomised words which don't look even slightly believable.
                    If you are going to use a passage of Lorem Ipsum, you need to be sure that that there isn't
                    anything embarassing hidden in the middle of the text.</p>
                </div>
                <div class="col-xs-3"><img src="img/contact.jpg" alt="alk.jpg"></div>
                </div>
            <div class="row">
                <div class="col-xs-6">
                    <h3><b>CONTACT US</b></h3>
                    <form method="post" action="contactus_submit.php" style="margin-bottom: 100px">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                         <input type="submit" class="btn btn-primary" style="background-color: #222222; border: #222222;" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-xs-4 col-xs-offset-2">
                    <h3><b>Company Information</b></h3>
                    <p>500 Lorem Ipsum Dolor Sit</p>
                    <p>22-56-2-9 Sit Amet, Lorem </p>
                    <p>USA</p>
                    <p>Phone:(00)222 666 444</p>
                    <p>Fax:(000)000 00 00 0</p>
                    <p>Email:info@mycompany.com</p>
                    <p>Follow On: Facebook,Twitter</p>
                </div>
            </div>
            </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>


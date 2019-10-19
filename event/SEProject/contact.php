<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Kunjal Shah</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: kunjal1999@gmail.com<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9819027140
                    </p>
                </div>
				<div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Huzaifa Shaikh</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: shaikhhuzaifa61@gmail.com<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 8850502791
                    </p>
                </div>
                
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

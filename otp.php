<?php
$uid=$_GET['uid'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="forgetpassword.css"/>
   
    </head>
    <body>

        <div class="form-container">
                
            <form action="forgottenpasswordbackend.php?uid=<?php echo $uid ?>" method="post" class="form-wrap" id="getotp">
                <div class="form-box">
                    <div>
                    <input type="text" name="otp" placeholder="Enter OTP"/>
                </div>
                <br>
                </div>
                <div class="form-box">
                    <input type="submit" value="Submit OTP " name="submit1" form="getotp"/>
                </div>
                
            </form>
            
            
        </div>
    </body>
</html>
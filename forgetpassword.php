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
            <form action="forgottenpasswordbackend.php" method="post" class="form-wrap">
                <h2>Forgot Password</h2>
                <div class="form-box">
                    <input type="text" name="email" placeholder="Enter Email"/>
                </div>
                <br>
                <div class="form-box">
                    <input type="submit" name="send"/>
                </div>
                <br>
          </form>    
            <!--<form action="forgottenpasswordbacken.php" method="post" class="form-wrap" id="getotp">
                <div class="form-box">
                    <div>
                    <input type="text" pattern="^[0-9]$" placeholder="Enter OTP"/>
                </div>
                <br>
                </div>
                <div class="form-box">
                    <input type="submit" value="Submit OTP " form="getotp"/>
                </div>
            </form>-->
        </div>
    </body>
</html>
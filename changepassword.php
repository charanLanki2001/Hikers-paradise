<?php

session_start();
   
$uid=$_GET['uid'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body
{
    height: 750px;
    margin: 2px;
    padding: 2px;
    width: 1000px;
}

/* Style all input fields */
input {
  width: 15%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  margin: right 30px;
  color:black;
}

/* Style the submit button */
input[type=submit] {
  transform: scale(1.03);
                            -webkit-transform: scale(1.03);
                            -moz-transform: scale(1.03);
                            -ms-transform: scale(1.03);
                            -o-transform: scale(1.03);
                            box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
                            text-align: center;
                            background-image: linear-gradient(to bottom right, red, yellow);
                            color: #fff;
                            padding: 10px 20px;
                            border: none;
                            font-size: 18px;
                            border-radius: 10px;
                            -webkit-border-radius: 100px;
                            -moz-border-radius: 100px;
                            -ms-border-radius: 100px;
                            -o-border-radius: 100px;
                            box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
                            cursor: pointer;
                            transition: all .3s;
                            -webkit-transition: all .3s;
                            -moz-transition: all .3s;
                            -ms-transition: all .3s;
                            -o-transition: all .3s;
                            }
}

/* Style the container for inputs */
#box 
{
  width: 1000px;
    margin: 0 auto;
    height:100%;
    border:1px solid #8D8D8D;
}


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #3f3f3f;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  colour: #3f3f3f;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}



</style>
</head>
<body>

<h2>Enter Your New Password</h2>
<h3>Please Enter the Correct Password  in the Given Space</h3>

<div id="box">
  <form action="action.php">
  <label for="psw">Password</label>
    <input type="password" id="psw1" name="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<br>
    <label for="psw">Conf Password</label>
    <input type="password" id="psw2" name="confpsw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

    <input type="hidden" name="uid" value="<?php echo $uid ?>">
<br>
    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  <p id="match" class="invalid">Match <b></b></p>
</div>
				


</body>
</html>
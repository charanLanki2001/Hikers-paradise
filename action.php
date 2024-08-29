<?php

include "php/dbconn.php";

    $psw=$_GET['psw'];
    $confpsw=$_GET['confpsw'];
    $uid=$_GET['uid'];
    $uidsearch="SELECT * FROM users WHERE id = '$uid'";
    $uidrun=mysqli_query($con, $uidsearch);
    $row6=mysqli_fetch_array($uidrun);
    $u_email=$row6['email'];

    if($psw==$confpsw)
    {
        $query = "UPDATE users SET password = '$psw' WHERE id = $uid;";

			$data = mysqli_query($con, $query);
			// Now let's move the uploaded image into the folder: image

			if($data)
            {
                echo "password changed";
                header("location:index.php");
            }
            else
            {
                echo "password didnt changed";
            }
    }
    else
    {
        echo "password does not match";
    }



?>
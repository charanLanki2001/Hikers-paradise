<?php
session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }
include "php\dbconn.php";
$uid=$_GET['uid'];
if(!$con)
{

	die("Connection failed because ".mysqli_connect_error());
}


	if(isset($_POST['submit']))
	{
		$ps = $_POST['password'];
		$cps = $_POST['cpassword'];

        if($ps==$cps)
        {
            if($ps=="")
            {
                $_SESSION['update']="empty field";
                header("location: http://localhost/ProjectHike/editprofile.php?uid=$uid");
            }
            else
            {
                $query="UPDATE `users` SET `password`='$ps' WHERE id='$uid'";
                $data = mysqli_query($con, $query);
                if($data)
                {
                    $_SESSION['update']="updated successfully";
                    header("location: http://localhost/ProjectHike/editprofile.php?uid=$uid");
                }
                else
                {
                    $_SESSION['update']="something went wrong";
                    header("location: http://localhost/ProjectHike/editprofile.php?uid=$uid");
                }
            }
            
        }
        else 
        {
            $_SESSION['update']="password and conf-password dosenot match"; 
            header("location: http://localhost/ProjectHike/editprofile.php?uid=$uid");   
        }
    }
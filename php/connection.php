<?php
session_start();
include "dbconn.php";
$email = $_POST['email'];
$password = $_POST['pass'];

 if(!$con)
 {
     die("failed to conneect:".$con->connect_error);
 }
 else if(isset($_POST['admin']))
{
    $emailpasswordsearch= "SELECT * FROM admin WHERE admin_name= '$email' AND adminpassword = '$password'";
    $emailsearch= "SELECT * FROM admin WHERE admin_name = '$email'";

    $emailsearchrun=mysqli_query($con, $emailsearch);
    $emailpasswordsearchrun=mysqli_query($con, $emailpasswordsearch);

    $row1=mysqli_fetch_array($emailsearchrun);
    $row2=mysqli_fetch_array($emailpasswordsearchrun);


    $u_email=$row2['admin_name'];
    $uid =$row2['id'];


    if($row1['admin_name'] == $email)
    {
        
        if($row2['admin_name'] == $email && $row2['adminpassword'] == $password)
        {
            
            $_SESSION['adstatus'] = "welcome ";
            $_SESSION['aduemail'] = $u_email;
            header("location:http://localhost/projecthike/admin/index.php?uid=$uid");
        }
        else
        {
            
            $_SESSION['adstatus'] = "wrong password";
            header("location: http://localhost/ProjectHike/admin/log.php");
            
        }
    }
    else
    {
        $_SESSION['adstatus'] = "no mail found";
        
        header("location: http://localhost/projecthike/admin/log.php");
       
    }
}
 else
{
    $emailpasswordsearch= "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $emailsearch= "SELECT * FROM users WHERE email = '$email'";

    $emailsearchrun=mysqli_query($con, $emailsearch);
    $emailpasswordsearchrun=mysqli_query($con, $emailpasswordsearch);

    $row1=mysqli_fetch_array($emailsearchrun);
    $row2=mysqli_fetch_array($emailpasswordsearchrun);


    $u_email=$row2['email'];
    $uid =$row2['id'];


    if($row1['email'] == $email)
    {
        
        if($row2['email'] == $email && $row2['password'] == $password)
        {
            
            $_SESSION['status'] = "welcome ";
            $_SESSION['uemail'] = $u_email;
            header("location:http://localhost/ProjectHike/home.php?uid=$uid");
        }
        else
        {
            
            $_SESSION['status'] = "wrong password";
            header("location: http://localhost/ProjectHike/index.php");
            
        }
    }
    else
    {
        $_SESSION['status'] = "no mail found";
        
        header("location: http://localhost/ProjectHike/index.php");
       
    }
}

 ?>

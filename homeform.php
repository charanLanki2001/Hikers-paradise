<?php
function check_login($con)
{
    if(isset($_SESSION['id']))
    {
        $id=$_SESSION['id'];
        $query="select * from user where id='$id' limit 1";  
    $result=mysqli_query($con,$query);
if($result&& musqli_num_rows($result)>0) 
{
    $user_data =mysqli_fetch_assoc($result);
    return $user_data;
}
}
    //redirect to login
    header("location:index.php");
    die;
}

?>
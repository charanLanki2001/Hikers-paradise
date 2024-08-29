<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikers_paradise";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{

	die("Connection failed because ".mysqli_connect_error());
}


	if(isset($_POST['submit']))
	{

		$em = $_POST['email']; 
		$na = $_POST['name']; 
		$ps = $_POST['password'];
		$ph = $_POST['phone'];
		$ad = $_POST['address'];

		$emailsearch= "SELECT * FROM users WHERE email = '$em'";
		$emailsearchrun=mysqli_query($conn, $emailsearch);
		$row1=mysqli_fetch_array($emailsearchrun);
		$u_email=$row1['email'];

        if($em==$u_email)
		{
			$_SESSION['status'] = "email already exist ";

			header('location: http://localhost/ProjectHike/signup.php');
		}
		else
		{
			$query = "INSERT INTO `users`(`name`, `email`, `password`, `phone`, `address`) 
			VALUES ('$na','$em','$ps','$ph','$ad')";

			$data = mysqli_query($conn, $query);
			// Now let's move the uploaded image into the folder: image

			if($data)
			{
			$_SESSION['status'] = "successfully registerd ";
			header('location: http://localhost/ProjectHike/index.php');
			}
			else
			{
			echo "Data insert failed";
			}
			mysqli_close($conn);
	    }
	}
	

?>
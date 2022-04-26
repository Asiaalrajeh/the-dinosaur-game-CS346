<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";

if(!$conn2 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

function check_login($conn2)
{

	if(isset($_SESSION['username']))
	{
        echo "redirect to login1";
		$id = $_SESSION['username'];
		$query = "select * from users where username = '$username' limit 1";

		$result = mysqli_query($conn2,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	echo "redirect to login2";
	//header("Location: login.php");
	//die;

}
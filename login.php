<?php 


session_start();

    include("connection.php");


    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
        $_SESSION['user']=$username;

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from registration3 where username = '$username' limit 1";
			$result = mysqli_query($conn2, $query);


			if($result)
			{   // if there are any rows with the same username.
				if($result && mysqli_num_rows($result) > 0)
				{
                
					$user_data = mysqli_fetch_assoc($result);
					// check the username as well.
					if($user_data['password'] === $password)
					{

						header("Location:  instruction_page.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	 body {
        background-image: url(cloudsBackgroundFast.gif);
      }
      canvas {
        display: block;
      }
      .box {
        margin-left: 25%;
        margin-top: 5%;
        width: 600px;
        height: 500px;
        border-radius: 10px;
        background-color: white;
        opacity: 0.7;
        font-family: gaming;
        align-items: center;
        display: none;
      }

      .box2{
        margin-left: 27%;
        margin-top: 5%;
        width: 300px;
        height: 200px;
        border-radius: 10px;
        background-color: white;
        opacity: 0.7;
        font-family: gaming;
        align-items: center;
        padding: 10%;
      }

      @font-face {
    font-family: 'gaming';
    src: url('FirstJob-X8rP.ttf');
}

    .button1{

        font-size: large;
        width: 70px;
        background-color: rgb(113, 179, 229);
        border-radius: 5px;
        text-align: center;
        margin-left: 45%;
        font-family: gaming;


    }

    .button2{

    font-size: large;
    width: 70px;
    background-color: rgb(113, 179, 229);
    border-radius: 5px;
    text-align: center;
    font-family: gaming;


}
    p{
        text-align: center;
    }
    label{
        text-align: center;
    }


	</style>

	<div class="box2">
		
        <!-- this form is for the login, the username and password are validated from the database, to make sure it is an exisiting user-->
		<form method="post">
            <h1  ALIGN = "center">Sign in to enjoy the game!</h1>
            <p>
            <input id="text"  ALIGN = "center" type="text" name="username" placeholder ="Username"><br>
			</p><p>
			<input id="text"  ALIGN = "center" type="password" name="password" placeholder ="Password"><br>
            </p>
            <p>
            <label>
			<input id="button"  type="submit" value="Login" class="button2" >
			<a href="sign.php"><input type="button" class="button2" value="Register" ></a><br>
            </label></p>
		</form>
	</div>
</body>
</html>
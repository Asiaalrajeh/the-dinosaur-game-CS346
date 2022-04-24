<?php


	$username = $_POST['username'];
	$password = $_POST['password'];
  $score = $_POST['highScore'];

	//$conn = new mysqli('localhost','root','','test'); // 2 username and password.
  $conn2 = new mysqli('localhost','root','','test2'); 
  // test is the name of the database
	
  

	if ($conn)
	{
		//die("connection");
	}

	if (!empty($username) && !empty($password))
	{
                        //registration is the name of the table
		$query = "insert into registration (username,password,highScore) values ('$username','$password','$score')";
		mysqli_query($conn2, $query);
    header("Location:  instruction_page.html");
	}
	else{
		echo "please enter correct data!";
	}
	


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Instructions</title>
    <style>
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
  </head>
  <body>

  </div>

    </div>

    <div class="box2" id="form">
      <div>
        <h1  ALIGN = "center">Sign in to enjoy the game!</h1>
        <form action="form.php" method="post">
            <p>
                <label> 
                    <input  id="username" type="text" placeholder="username" name="username">
                </label>
            </p>
            <p>
                    <input id="password" type="password" placeholder="password" name="password">
            </p>
            <p>
            <input type="submit"  ALIGN = "center" id="btn" class="button2" value="Register" name="submit">
            </p>
            
        </form>

      </div>
    </div>



  </body>
</html>







<!--
<!DOCTYPE html>
<html>
  <head>
    <title>Instructions</title>
    <script src="script.js"></script>
    <style>
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
  </head>
  <body>
  
    <div class = "box" id="inst">

    <br><br>
    <h1 ALIGN = "center"> Welcome</h1>

    <p>The rules of the game are simple..</p>
    <br>
    <p ALIGN = "center"> press the <img src="space.png" alt="" width="60px"> to avoid the obstacle</p>
    

    <p ALIGN = "center"> Use your voice and say "UP" for a challenge!</p>
    <p>GOOD LUCK!</p>

    <br><br>
    <a href="index.html"><input id="startButton" class="button1" ALIGN = "center" type="button" name="Start" id="start" value="Start">
    </a>


  </div>

    </div>

    <div class="box2" id="form">
      <div>
        <h1  ALIGN = "center">Sign in to enjoy the game!</h1>
        <form action="form.php" method="post">
            <p>
                <label> 
                    <input  id="username" type="text" placeholder="username" name="username">
                </label>
            </p>
            <p>
                    <input id="password" type="password" placeholder="password" name="password">
            </p>
            <p>
                <input type="submit"  ALIGN = "center" id="btn" class="button2" value="Register" name="submit">
            </p>
            
        </form>

      </div>
    </div>



  </body>
</html>
-->


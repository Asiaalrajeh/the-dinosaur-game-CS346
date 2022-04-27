<?php

session_start();

include("connection.php");

//$conn2 = new mysqli('localhost','root','','test2');     
	//$user_data = check_login($conn2);


  $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $score = isset($_POST["score"]) ? $_POST["score"] : "";


//	$username = $_POST['username'];
//	$password = $_POST['password'];
  //$score = $_POST['highScore'];
 // $Score = $_GET['score'];


	//$conn = new mysqli('localhost','root','','test'); // 2 username and password.
  //$conn2 = new mysqli('localhost','root','','test2'); 
  // test is the name of the database
	


	//if ($conn)
	//{
		//die("connection");
	//}

	if (!empty($username) && !empty($password))
	{
                        //registration is the name of the table
		//$query = "insert into registration2 (username,password,highScore) values ('$username','$password','0')";
		//mysqli_query($conn2, $query);
    header("Location:  instruction_page.php");

    $query = "insert into registration2 (username,password,highScore) values ('$username','$password','0')";
		mysqli_query($conn2, $query);
    
    //$Score = $_GET['score'];
    //$query = "insert into registration (username,password,highScore) values ('$username','$password','$Score')";
		//mysqli_query($conn2, $query);

	}
	else{
	
	}
	
  /// we may change the query to display highest scores only
  $query2="SELECT username,highScore From registration2";
  $rs = mysqli_query($conn2,$query2);

  //print the table of users and scores
  $results = array();
  if(mysqli_num_rows($rs)>0){
    while($row=mysqli_fetch_assoc($rs)){
      array_push($results,$row);
    }  }

    echo json_encode($results);

	


?>





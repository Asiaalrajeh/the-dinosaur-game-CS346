<?php
session_start();
include("connection.php");


$user_data = check_login($conn2);

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
      .hello {
        margin-left: 25%;
        margin-top: 5%;
        width: 600px;
        height: 500px;
        border-radius: 10px;
        background-color: white;
        opacity: 0.7;
        font-family: gaming;
        align-items: center;
       
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
  
    <div class = "hello" >

    <br><br>
    <h1 ALIGN = "center"> Welcome </h1>

     <!---<?php echo $user_data['username'];?>-->

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




  </body>
</html>
let K;
let kimg;
let biimg;
let bimg;
let birds =[];
let soundClassifier;
let counter =0;
//let highscore = localStorage.getItem("highscore");
//var storagedHighScore = localStorage.getItem("highscore");
var localStorageName = "highScore";
var highScore;
let mySound1 = new Audio('game_over.wav')


if(localStorage.getItem(localStorageName) == null) {
    highScore = 0;
} else {
    highScore = localStorage.getItem(localStorageName);
}

function preload(){

   const options = { probabilityThreshold: 0.95};
  soundClassifier = ml5.soundClassifier('SpeechCommands18w', options);

    bimg = loadImage('cloudsBackgroundFast.gif');
    kimg = loadImage('kiki.png');
    biimg = loadImage('bird.gif');


}
function setup(){
    createCanvas(1280,600);
    K = new Kiki();

    soundClassifier.classify(gotCommand);
}

function gotCommand(error, results) {
    if (error) {
      console.error(error);
    }
    console.log(results[0].label, results[0].confidence);
    if (results[0].label == 'up') {
        K.fly();
    }
  }

function keyPressed(){
    if(key == ' '){
        K.fly();
    }
}

function draw(){
    if(random(1) < 0.005){
        birds.push(new bird());
    }

    background(bimg);

    for( let b of birds){
        b.move();
        b.show();
        if( !K.hits(b)){
            counter++;
            highScore = Math.max(counter, highScore);
            localStorage.setItem(localStorageName, highScore);}
        if( K.hits(b)){
            mySound1.play()
            console.log('game over');
            showEnd();
            noLoop();
        }

    }
    text('SCORE: ' + counter, width - 400, height / 5);
    K.show();
    K.move();


}

///////////////////////////// extra

//function alertThis(){
   // swal({
        //title:player,
       // text: "GAME OVER!\n \n YOUR SCORE:" +counter+ "\n \n HIGH SCORE :" + highScore,
       //closeOnClickOutside:true

   //})


//}
function showEnd(){

    document.getElementById("score").innerHTML="Your Score:"+ counter;
    document.getElementById("endScreen").style.display="block";
    document.getElementById("scoreContainer").innerHTML="Loading...";
    getScores()
}

function getScores(){
    fetch('form.php').then(function(response){
        response.json().then(function(data){
            console.log(data);
            document.getElementById("scoreContainer").innerHTML= formatScore(data);

        });
    });
}

function formatScore(data){

    let html = "<table style= 'width:100%; text-align: center;'>";

    html += "<tr style='background:rgb(123,146,196); color:white'>";
    html += "<td></td><td><b>Name<b></td><td><b>Score<b></td></tr>";

   

}
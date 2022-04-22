let K;
let kimg;
let biimg;
let bimg;
let birds =[];
let soundClassifier;
let counter =0;

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
        if( !K.hits(b)){counter++;}
        if( K.hits(b)){
            console.log('game over');
            alertThis();
            noLoop();
        }

    }
    text('SCORE: ' + counter, width - 400, height / 5);
    K.show();
    K.move();


}

///////////////////////////// extra

function alertThis(){
    swal({
        //title:player,
        text: "GAME OVER!\n YOUR SCORE: " + counter,
       closeOnClickOutside:true

   })


}

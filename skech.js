let Kiki;
let kimg;
let biimg;
let bimg;
let birds =[];
let soundClassifier;

function preload(){
   
   const options = { probabilityThreshold: 0.95};
  soundClassifier = ml5.soundClassifier('SpeechCommands18w', options);

    bimg = loadImage('cloudsBackgroundFast.gif');
    kimg = loadImage('kiki.png');
    biimg = loadImage('bird.gif');


}
function setup(){
    createCanvas(1280,500);
    Kiki = new Kiki();

    soundClassifier.classify(gotCommand);
}

function gotCommand(error, results) {
    if (error) {
      console.error(error);
    }
    console.log(results[0].label, results[0].confidence);
    if (results[0].label == 'up') {
        Kiki.fly();
    }
  }

function keyPressed(){
    if(key == ' '){
        Kiki.fly();
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
        if( Kiki.hits(b)){
            console.log('game over');
            alertThis();
            noLoop();
        }

    }
    Kiki.show();
    Kiki.move();

    
}

///////////////////////////// extra

function alertThis(){
    swal({
        //title:player,
        text: "GAME OVER!",
       closeOnClickOutside:true
 
   })


}
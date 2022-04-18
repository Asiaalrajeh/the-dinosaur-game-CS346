// Daniel Shiffman
// https://thecodingtrain.com/CodingChallenges/147-chrome-dinosaur.html
// https://youtu.be/l0HoJHc-63Q

// Google Chrome Dinosaur Game (Unicorn, run!)
// https://editor.p5js.org/codingtrain/sketches/v3thq2uhk

class bird {
    constructor() {
      this.r = 80;
      this.x = width;
      this.y = height - this.r;
    }
  
    move() {
      this.x -= 10;
    }
  
    show() {
      image(biimg, this.x, this.y, this.r, this.r);

    }
  }
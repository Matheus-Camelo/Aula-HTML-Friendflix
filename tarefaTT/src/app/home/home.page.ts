import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  title = 'FRIENDFLIX'
  likeHere= 'A plataforma essencial para apaixonados em séries'
  numberOfLikes: number = 0
  is_liked:true
  is_disliked:false
  
  
  likeButtonClick(){
    this.numberOfLikes++;
  }

  dislikeButtonClick(){
    this.numberOfLikes--;
  }
  constructor() {}

}

// export class LikeComponent {
//   numberOfLikes: number;
  
//   likeButtonClick(){
//   this.numberOfLikes++;
//   }

// dislikeButtonClick(){
//   this.numberOfLikes--;
//   }

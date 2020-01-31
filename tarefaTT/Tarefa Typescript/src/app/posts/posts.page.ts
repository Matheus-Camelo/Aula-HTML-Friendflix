import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-posts',
  templateUrl: './posts.page.html',
  styleUrls: ['./posts.page.scss'],
})
export class PostsPage implements OnInit {
  likeHere= 'Dê seu LIKE abaixo!'
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

  ngOnInit() {
  }

}

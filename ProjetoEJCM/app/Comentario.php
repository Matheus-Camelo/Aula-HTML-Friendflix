<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
  //Adicionando One-to-Many com user
  public function user(){
    return $this->belongsTo('App\User',"user_id")

  }
}

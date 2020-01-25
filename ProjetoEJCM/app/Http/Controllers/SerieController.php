<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{

public function createSerie(Request $request){

  $serie = new Serie;

  $serie->name = $request->name;
  $serie->seasons = $request->seasons;
  $serie->plataform = $request->plataform;
  $serie->genre = $request->genre;
  $serie->ranking = $request->ranking;
  $serie->rating = $request->rating;
  $serie->save();

  return response()->json([$serie]);
}

public function listSerie(){

  $serie = Serie::all();
  return response()->json($serie);

}

public function showSerie($id){

  $serie = Serie::findOrFail($id);
  return response()->json([$serie]);

}

public function updateSerie(Request $request, $id){

  $serie = Serie::find($id);

  if($serie){
    if($request->name){
      $serie->name = $request->name;
    }
    if($request->seasons){
      $serie->seasons = $request->seasons;
    }
    if($request->plataform){
      $serie->plataform = $request->plataform;
    }
    if($request->genre){
      $serie->genre = $request->genre;
    }
    if($request->ranking){
      $serie->ranking = $request->ranking;
    }
    if($request->rating){
      $serie->rating = $request->rating;
    }
    $serie->save();
    return response()->json([$serie]);
  }
  else{
    return response()->json(['Esta serie não existe']);
  }

}

public function deleteSerie($id){

  Serie::destroy($id);
  return response()->json(['Serie Deletada']);
}


}

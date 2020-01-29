<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class UserController extends Controller
{

public function createUser(UserRequest $request){
  $user = new User;

  $user->name = $request->name;
  $user->email = $request->email;
  $user->password = $request->password;
  $user->age = $request->age;
  $user->gender = $request->gender;
  $user->phone = $request->phone;
  $user->save();

  return response()->json([$user]);
}

public function listUser(){

  $user = User::all();
  return response()->json($user);

}

public function showUser($id){

  $user = User::findOrFail($id);
  return response()->json([$user]);

}

public function updateUser(Request $request, $id){

  $user = User::find($id);

  if($user){
    if($request->name){
      $user->name = $request->name;
    }
    if($request->email){
      $user->email = $request->email;
    }
    if($request->password){
      $user->password = $request->password;
    }
    if($request->age){
      $user->age = $request->age;
    }
    if($request->gender){
      $user->gender = $request->gender;
    }
    if($request->phone){
      $user->phone = $request->phone;
    }
    $user->save();
    return response()->json([$user]);
  }
  else{
    return response()->json(['Este user não existe']);
  }

}

public function deleteUser($id){

  User::destroy($id);
  return response()->json(['User Deletado']);
}


}

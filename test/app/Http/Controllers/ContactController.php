<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  private $idglobal = null;

  // Create Form
  public function createUserForm() {
    
    $users = User :: all();
    

    return view('inscription', [
      'users' => $users
    ]);
  }

  public function show($id) {
    
    $user = User :: findOrFail($id);
    

    return view('mapage', [
      'user' => $user
    ]);

  }

  public function UpdateText(Request $request, $id){

    $u = User :: find($id);

    if (($request -> text) == null){
      $u->update([
        'text' => ''
      ]);
    }
    else{
      $u->update([
        'text' => $request -> text
      ]);
    }
    
    //
    return view('mapage', [
      'user' => $u
    ]);

  }

  // Store Form data in database
  public function UserForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'name' => 'required|unique:users',
          'email' => 'required|email|unique:users',
          'password' => 'required'
          
       ]);

      //  Store data in database
      'App\Models\User'::create([
        'name'=> $request -> name,
        'email'=> $request -> email,
        'password'=> $request -> password,
        'text'=> ''
      ]);
      //
      return back()->with('success', 'Les données ont été enregistrées avec succès.');
  }

  public function connex() {
    
    

    return view('connexion');
  }

  public function connexion(Request $request) {

    // Form validation
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
        
     ]);

    //  Connexion
    // $idglobal
    if ((is_int((User :: where('email', $request -> email )->firstOrFail())->id))||(((User :: where('email', $request -> email )->firstOrFail())->password) ==($request >password))) {
      
      
      $userc = User :: where('email', $request -> email )->firstOrFail();

      return view('mapage', [
        'user' => $userc
      ]);

      
      
    }  else if(!(is_int((User :: where('email', $request -> email )->firstOrFail())->id))){
   
      $users = User :: all();
    

      return view('inscription', [
      'users' => $users
      ]);
      return back()->with('success', 'Les données ont été enregistrées avec succès.');
  }    

}

public function list() {
    
  $users = User :: all();
  

  return view('listeusers', [
    'users' => $users
  ]);
}

}
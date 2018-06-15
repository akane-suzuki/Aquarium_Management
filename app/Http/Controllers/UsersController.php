<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Aquarium;
use Auth;

class UsersController extends Controller
{
    public function show($id){
      $prof = User::find($id);
      $aquariums = Aquarium::where('user_id', Auth::user()->id)->paginate(10);
      return view('users.user')->with(array(
                                      'prof' => $prof,
                                      'aquariums' => $aquariums,
                                      ));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Aquarium;
use Auth;

class AquariumsController extends Controller
{
    public function show($id){
      $details = Aquarium::find($id);

      return view('Aquarium.show')->with('details', $details);
    }

}

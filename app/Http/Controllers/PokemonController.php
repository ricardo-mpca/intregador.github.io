<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function pokelist(){
        
        return view ('pokelist');
   
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
  

{
    public function index() {
        // call apis

        $posts = Http::get("https://jsonplaceholder.typicode.com/posts");

        return view ('posts', [
          'posts' => json_decode($posts)
       ]);
    }

    public function github(){
       
        $github = Http::get('https://api.github.com/users/binascohub/repos');

        dd($github);
      // return view ('github', [
      //  'github' => json_decode($github)
      // ]);
    }

    public function api() {
        return view ('integra.api');
    }

    public function pokemon(){
        $pokemons = Http::get("https://www.canalti.com.br/api/pokemons.json");
        
        return view ('pokemon', [
            'pokemon' => json_decode($pokemons)
        ]);

    }

    


}
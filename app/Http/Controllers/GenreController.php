<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function list(Request $resquest){

        if ($resquest->query('orderBy') && $resquest->query('order')){
            $genre = Genre::OrderBy($resquest->query('orderBy'), $resquest->query('order'))
            ->paginate(21);
        }
        else{   
            $genre = Genre::paginate(21);
        }

        return view('movies.genre',['genre'=>$genre]);
    }
}
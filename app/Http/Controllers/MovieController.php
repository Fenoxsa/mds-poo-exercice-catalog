<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id){
    
        // $query = Movie::query();
        // $query = $query->where('id', $id);
        // $query = $query->orWhere('id', 154);

        // Movie::where('id', $id)->first();

        $movie = Movie::where('id',$id)->first();
        dump($movie);
        return view('movies.show',['movie'=>$movie]);

    }
    public function list(Request $resquest){

        if ($resquest->query('orderBy') && $resquest->query('order')){
            $movies = Movie::OrderBy($resquest->query('orderBy'), $resquest->query('order'))
            ->paginate(21);
        }
        else{   
            $movies = Movie::paginate(21);
        }

        return view('movies.list',['movies'=>$movies]);
    }

    public function random(){
       $movie = Movie::inRandomOrder()->first();
        // return dd($movie);
       return view('movies.show', ['movie'=>$movie]);
    }
}

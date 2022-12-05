<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function show($id){
    
        // $query = Movie::query();
        // $query = $query->where('id', $id);
        // $query = $query->orWhere('id', 154);

        // Movie::where('id', $id)->first();

        $movie = Movie::where('id',$id)->first();
        return view('movies.show',['movie'=>$movie]);

    }
    public function list(Request $request){

        
        $query = Movie::query();
        $page = 1;
        if (request('order_by') == null) {
            $filtre = 'id';
        }else {
            $filtre = request('order_by');
        }

        $genre = request('genre');
        if ($genre != null) {
            $query = Movie::whereHas('genre', function (Builder $query ) {
                $query->where('label', request('genre'));
               });
        }
        $query->orderBy($filtre, 'ASC');

        $moviesPerPage = 21;
        $pageQuery = ($request->has('page')) ? $request->query('page') : 1;
        $query->skip(($pageQuery -1) * $moviesPerPage )->take($moviesPerPage);
        
        $movies = $query->paginate(21);
        return view('movies.list', [
            'movies' => $movies,
            'page' => $page,
            'filtre' => $filtre,
            'genre' => $genre,
        ]);
    }

    public function random(){
       $movie = Movie::inRandomOrder()->first();
        // 
       return view('movies.show', ['movie'=>$movie]);
    }
}

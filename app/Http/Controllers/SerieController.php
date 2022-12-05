<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    
    public function show($id){
    
        // $query = Movie::query();
        // $query = $query->where('id', $id);
        // $query = $query->orWhere('id', 154);

        // Movie::where('id', $id)->first();

        $Series = Series::where('id',$id)->first();
        return view('series.show',['series'=>$Series]);

    }
    public function list(Request $request){

        
        $query = Series::query();
        $page = 1;
        if (request('order_by') == null) {
            $filtre = 'id';
        }else {
            $filtre = request('order_by');
        }

        $genre = request('genre');
        if ($genre != null) {
            $query = Series::whereHas('genre', function (Builder $query ) {
                $query->where('label', request('genre'));
               });
        }
        $query->orderBy($filtre, 'ASC');

        $SeriesPerPage = 21;
        $pageQuery = ($request->has('page')) ? $request->query('page') : 1;
        $query->skip(($pageQuery -1) * $SeriesPerPage )->take($SeriesPerPage);
        
        $series    = $query->paginate(21);
        return view('series.list', [
            'series' => $series,
            'page' => $page,
            'filtre' => $filtre,
            'genre' => $genre,
        ]);
    }

    public function random(){
       $Series = Series::inRandomOrder()->first();
        // return dd($movie);
       return view('series.show', ['serie'=>$Series]);
    }
}

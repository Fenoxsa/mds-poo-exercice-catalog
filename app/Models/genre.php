<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
=======

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Genre extends Model
>>>>>>> 29e211f93028ce3b24f9aa628176dc93133c7290
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genres';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
<<<<<<< HEAD

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'movies_genres');
    }
=======
>>>>>>> 29e211f93028ce3b24f9aa628176dc93133c7290
}

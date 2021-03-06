<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category() {
        return $this->belongsToMany("App\Category", "movie_category");
    }
}

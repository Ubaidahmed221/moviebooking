<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCat extends Model
{
    use HasFactory;
    protected $table = "movie_cats";
    protected $primaryKey = "mcid";
}

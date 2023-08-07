<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbooking extends Model
{
    use HasFactory;
    protected $table = "mbookings";
    protected $primaryKey = "bookid";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientuser extends Model
{
    use HasFactory;
    protected $table = "clientusers";
    protected $primaryKey = "cid";
}
?>
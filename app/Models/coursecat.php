<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coursecat extends Model
{
     use HasFactory;
     protected $primaryKey = 'c_id';
       protected $fillable=(
        [ 'c_name', 'c_status',]
    );
}

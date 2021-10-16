<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
      protected $fillable=(
        [ 'name', 'text', 'time', 'duration', 'imglink', 'c_id', 'status','category','student']
    );
}

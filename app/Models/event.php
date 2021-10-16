<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
        protected $fillable=(
        [ 'tittle', 'date', 'time', 'address', 'img_link', 'details', 'status']
    );
}

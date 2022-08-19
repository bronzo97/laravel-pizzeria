<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'pizza_name', 'ingredients', 'price', 'size', 'nutritional_values'
    ];
}

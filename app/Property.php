<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'];

}

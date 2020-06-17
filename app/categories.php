<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [
   'first_name', 'last_name', 'age' , 'city' , 'country' , 'price'
  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

  protected $fillable = ['title', 'author', 'number_pages', 'quantity_copies', 'quantity_copies_available'];
}

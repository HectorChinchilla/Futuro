<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $table = 'clients';

  protected $fillable = ['code', 'fullname', 'birthdate', 'is_active'];
}

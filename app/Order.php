<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';

  protected $fillable = ['date_order', 'date_devolution', 'state_order', 'number_order'];
}

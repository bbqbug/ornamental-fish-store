<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class OrderDetail extends Model
{
  protected $table = 'order_details';
  use HasFactory;


  public function product(): MorphTo
  {
    return $this->morphTo();
  }
}

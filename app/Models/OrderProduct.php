<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
  use HasFactory;

  protected $table = 'order_product';

  protected $fillable = [
    'order_id',
    'product_id',
    'jumlah',
  ];

  public function order()
  {
    return $this->belongsTo(Order::class, 'order_id', 'order_id');
  }

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id', 'product_id');
  }
}

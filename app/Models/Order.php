<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $table = 'order';

  protected $primaryKey = 'order_id';

  protected $fillable = [
    'user_id',
    'total_harga',
    'tgl_dipesan',
    'tgl_diterima'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'order_product');
  }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $table = 'account';

  protected $primaryKey = 'account_id';

  protected $fillable = [
    'email',
    'password',
    'role',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function user()
  {
    return $this->hasOne(User::class, 'account_id', 'account_id');
  }

  public function admin()
  {
    return $this->hasOne(Admin::class, 'account_id', 'account_id');
  }
}

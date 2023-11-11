<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laundry extends Model
{
  use HasFactory;

  protected $guarded = [];

  protected $casts = [
    'services' => 'array',
  ];

  protected $hidden = [
    'user'
  ];

  protected $appends = [
    'shop'
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function getShopAttribute(): string
  {
    if ($this->relationLoaded('user')) {
      return $this->user->name;
    }
    return '';
  }
}

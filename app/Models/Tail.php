<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tail extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
      'image',
      'region_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');

    }
}

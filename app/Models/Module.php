<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function steps()
    {
        return $this->hasMany(ModuleStep::class);
    }

    public function results()
    {
        return $this->hasMany(ModuleResult::class);
    }
}

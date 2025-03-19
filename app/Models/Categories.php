<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'like', "%$keyword%");
    }
}

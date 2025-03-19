<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'slug', 'content', 'image'];

    public function scopeSearch($query, $keyword)
    {
        return $query->where('title', 'like', "%$keyword%");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'slug', 'description', 'price', 'image', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->join('categories', 'products.category_id', '=', 'categories.id')
                 ->where('products.name', 'like', "%$keyword%")
                 ->orWhere('products.description', 'like', "%$keyword%")
                 ->orWhere('categories.name', 'like', "%$keyword%")  // Tìm kiếm theo tên danh mục
                 ->select('products.*', 'categories.name as category_name');  // Lựa chọn tất cả cột của product và tên category
    }
}

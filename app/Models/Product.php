<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Packsize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'slug',
        'description',
        'category_id',
        'stock',
        'packsize_id',
        'price',
        'mrp',
        'sku',
        'stock_status',
        'ingredients',
        'top_product',
        'best_product',
        'brand_id'
        // 'status'
    ];

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');      
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');      
    }

    public function packsize()
    {
        return $this->belongsTo(Packsize::class,'packsize_id');      
    }
}

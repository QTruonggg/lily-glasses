<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail',
        'product_code',
        'color',
        'color-image',
        'category_id',
        'old_price',
        'percent_discount',
        'current_price',
        'seo_keyword',  
        'seo_description',
        'status',
    ];
    public function colors(){
        return $this->hasMany(ProductColor::class);
    }
    public function parent(){
       return $this->belongsTo(Category::class);
    }
}

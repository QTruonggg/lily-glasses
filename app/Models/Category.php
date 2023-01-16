<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'thumbnail',
        'name',
        'parent_id',
        'slug',
        'seo_title',
        'seo_keyword',
        'seo_description',
    ];
    public function parent(){
       return $this->belongsTo(Category::class);
    }
    public function childs(){
        return $this->hasMany(Category::class ,'parent_id');
    }
    public function productChilds(){
        return $this->hasMany(Product::class ,'category_id');
    }
}

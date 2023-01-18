<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $table = 'service_categories';
    protected $fillable = [
        'category_id',
        'thumbnail',
        'name',
        'seo_description',
        'seo_title',
        'seo_keyword',
    ];
}

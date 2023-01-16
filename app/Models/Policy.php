<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'subname',
        'description',
        'status',
        'seo_title',
        'seo_keyword',
        'seo_description',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shared extends Model
{
    use HasFactory;
    protected $table = "shared";
    protected $fillable = [
        'id',
        'name',
        'subname',
        'thumbnail',
        'seo_title',
        'seo_keyword',
        'seo_description',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'logo',
        'title',
        'address',
        'time',
        'email',
        'hotline',
        'blog',
        'share',
        'category',
        'service',
        'video',
        'social_network',
        'google_map',
        'seo_title',
        'seo_description',
        'seo_keyword',
    ];
}

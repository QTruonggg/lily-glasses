<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name',
        'address',
        'time',
        'email',
        'hotline',
        'video',
        'network_fb',
        'network_ins',
        'google_map',
        'seo_title',
        'seo_description',
        'seo_keyword',
    ];
}

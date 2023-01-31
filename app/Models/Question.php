<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = "question";
    protected $fillable = [
        'id',
        'name',
        'image',
        'image_1',
        'question_1',
        'image_2',
        'question_2',
        'image_3',
        'question_3',
        'image_4',
        'question_4',
    ];
}

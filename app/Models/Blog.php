<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'preview',
        'preview_image',
        'content',
        'title',
        'user_id',
        'topic_id'
    ];
}

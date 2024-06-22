<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'image_url',
        'image_alt',
        'title',
        'author',
        'content',
        'show_first',
        'show_updated_at_date',
    ];
}

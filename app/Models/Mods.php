<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mods extends Model
{
    use HasFactory;


    protected $table = 'mods';
    protected $fillable = [
        'title',
        'image',
        'category',
        'date',
        'author',
        'desc',
        'size',
        'likes',
        'link',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Armor extends Model
{
    protected $table = 'armor';
    protected $fillable = [
        'title',
        'helmet',
        'body_armor',
        'gloves',
        'boots',
        'location',
        'bonus',
        'image',
        'type',
    ];
    protected $dates = ['deleted_at'];
    use HasFactory, SoftDeletes, ValidatesRequests;
}

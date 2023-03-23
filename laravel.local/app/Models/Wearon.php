<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wearon extends Model
{
    protected $table = 'wearon';
    protected $fillable = [
      'name',
        'description',
        'material',
        'weight',
        'image',
        'location',
        'type',
    ];
    use HasFactory, SoftDeletes;
}

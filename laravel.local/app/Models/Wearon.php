<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Validation\ValidatesRequests;

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
    protected $dates = ['deleted_at'];
    use HasFactory, SoftDeletes, ValidatesRequests;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class furniture extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'article',
        'description',
        'price',
        'image',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'type', 'price', 'title', 'description', 'location', 'beds', 'bath', 'area', 'featured', 'images'
    ];
}

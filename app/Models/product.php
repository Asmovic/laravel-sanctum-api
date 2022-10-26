<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Allow mass assignment.
    protected $fillable = ['name', 'slug', 'description', 'price'];
    use HasFactory;
}

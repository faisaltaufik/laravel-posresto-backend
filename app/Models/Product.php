<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stoct',
        'status',
        'is_favorite',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'category_id', 'description', 'cover_image', 'price', 'stock'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

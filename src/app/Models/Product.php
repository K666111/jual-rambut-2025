<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'stock', 'price'];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}

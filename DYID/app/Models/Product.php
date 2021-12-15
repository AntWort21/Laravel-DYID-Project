<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id'
    ];

    public function historyDetail(){
        return $this->hasMany(historyDetail::class, 'product_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function cartDetails(){
        return $this->hasMany(CartDetail::class, 'product_id');
    }
}

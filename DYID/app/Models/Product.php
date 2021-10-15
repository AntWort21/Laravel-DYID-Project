<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $attribute = [
        'productName',
        'productDescription',
        'productPrice',
        'productImage',
        'categoryId'
    ];

    // $table->increments('productId');
    //         $table->string('productName');
    //         $table->string('productDescription');
    //         $table->integer('productPrice');
    //         $table->string('productImage');
    // 
}

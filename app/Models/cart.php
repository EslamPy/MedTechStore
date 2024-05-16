<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_image', 'product_name', 'product_price', 'product_quantity', 'product_total',];
    
    protected $table = 'cart';
}

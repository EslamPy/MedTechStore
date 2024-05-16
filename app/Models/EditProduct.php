<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditProduct extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name' , 'description' , 'category' , 'price' , 'imgpath'];

    protected $table = 'EditProduct';
}

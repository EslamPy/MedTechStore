<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latest_news extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name' , 'title' , 'description' , 'email' , 'created_at' , 'updated_at'];
    protected $table = 'latest_news';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name' , 'title' , 'description' ,'imgpath' , 'created_at' , 'updated_at'];
    protected $table = 'latest_news';
}

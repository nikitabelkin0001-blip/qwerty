<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title', 'desc', 'text', 'date'
    ];
    protected $guarded = ['id'];
    public $timestamps = 'false';
}

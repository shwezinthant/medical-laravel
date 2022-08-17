<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_title',
        'short_description',
        'long_description',
        'posted_by',
        'main_photo_path',
        'sub_photo_path',
       
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

}

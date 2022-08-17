<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_no',
        'email',
        'post_id',
        'comment_description',
    ];
    public function posts()
    {
        return $this->hasMany(PostProduct::class);
    }
    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }
}

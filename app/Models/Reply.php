<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_id',
        'reply_by',
        
        'reply_description',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

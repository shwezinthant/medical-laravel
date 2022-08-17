<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'sub_name', 
        'brand_name',
        'category_id',
        'type',
        'main_photo_path',
        'sub_photo_path',
        'composition',
        'medication',
        'usage',
        'instock_qty',
        'purchase_price',
        'selling_price',
        'country_of_origin',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function post()
    {
        return $this->belongsTo(PostProduct::class);
    }
}


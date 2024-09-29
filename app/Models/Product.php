<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'subcategory_id', 'category_id', 'name', 'title', 'sub_title',
    //     'sizes', 'colors', 'image', 'price', 'old_price',
    //     'sub_description', 'description', 'information', 'status'
    // ];
    protected $fillable = [
        'subcategory_id', 'category_id', 'name', 'title', 'sub_title',
        'image', 'price', 'old_price',
        'sub_description', 'description', 'information', 'status','status_1'
    ];

    // protected $casts = [
    //     'sizes' => 'array',
    //     'colors' => 'array',
    // ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }


}

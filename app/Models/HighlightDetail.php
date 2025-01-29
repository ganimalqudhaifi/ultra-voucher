<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HighlightDetail extends Model
{
    protected $fillable = [
        'id',
        'id_merchant',
        'merchant_name',
        'id_product',
        'type',
        'price_list',
        'discount_type',
        'discount',
        'fix_price',
        'price',
        'is_favorite',
        'image_id_master_image',
        'image_id_master_imageable',
        'image_url',
        'image_alt',
        'slug_url',
        'meta_title',
        'meta_description',
        'canonical',
    ];
}

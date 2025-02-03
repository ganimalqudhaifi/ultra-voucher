<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromoDetail extends Model
{
    protected $fillable = [
        'id',
        'id_product',
        'code',
        'name',
        'product_type',
        'ultra_voucher',
        'description',
        'tnc',
        'nominal',
        'discount_type',
        'price_list',
        'discount',
        'fix_price',
        'price',
        'is_idle',
        'is_promo',
        'id_promo',
        'qty_limit',
        'is_unlimited',
        'is_bundling',
        'stock_available_to_reserve',
        'sort',
        'initial_stock',
        'image',
        'merchant_icon',
        'merchant_name',
        'promo',
        'slug_url',
        'meta_title',
        'meta_description',
        'canonical'
    ];

    protected $casts = [
        'image' => 'array',
        'merchant_icon' => 'array',
        'merchant' => 'array',
    ];

}

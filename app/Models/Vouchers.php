<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vouchers extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'brand_id',
        'is_favorite',
        'is_bundling',
        'code',
        'code_2',
        'name',
        'name_2',
        'description',
        'term_and_condition',
        'type',
        'nominal',
        'price_list',
        'ultra_voucher',
        'is_show',
        'status',
        'deeplink_url',
        'redeem_messages',
        'is_shareable',
        'slug_url',
        'sku_product_voucher',
        'image',
        'merchant',
        'discount_setup',
        'voucher_sold',
        'is_enabled',
        'is_diamond_perks',
        'sku_master_voucher',
        'discount',
        'discount_type',
        'final_price',
        'stock',
        'count_transaction',
        'created_first_name',
        'created_last_name',
        'modified_first_name',
        'modified_last_name',
        'bundling_items',
        'meta_title',
        'meta_description',
        'canonical'
    ];

    protected $casts = [
        'is_favorite' => 'boolean',
        'is_bundling' => 'boolean',
        'term_and_condition' => 'string',
        'nominal' => 'integer',
        'price_list' => 'integer',
        'redeem_messages' => 'integer',
        'is_shareable' => 'boolean',
        'sku_product_voucher' => 'array',
        'image' => 'array',
        'merchant' => 'array',
        'discount_setup' => 'array',
        'sku_master_voucher' => 'array',
        'stock' => 'array',
        'bundling_items' => 'array',
    ];

    public  function brand(): BelongsTo
    {
        return $this->belongsTo(Brands::class);
    }
}

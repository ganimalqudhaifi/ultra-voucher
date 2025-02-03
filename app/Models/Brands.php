<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'parent_account',
        'corporate_industry',
        'merchant_type',
        'is_favorite',
        'price_list',
        'corporate_service',
        'code',
        'name',
        'count_transaction',
        'account_category',
        'image',
        'background_image',
        'slider_images',
        'background_logo_image',
        'redeem_background_image',
        'accept_uv_payment',
        'discount',
        'is_have_shadow',
        'merchant_icon',
        'nearest_outlet',
        'is_enabled',
        'is_diamond_perks',
        'slug_url',
        'meta_title',
        'meta_description',
        'canonical',
    ];

    protected $casts = [
        'parent_account' => 'array',
        'price_list' => 'array',
        'account_category' => 'array',
        'image' => 'array',
        'background_image' => 'array',
        'slider_images' => 'array',
        'background_logo_image' => 'array',
        'redeem_background_image' => 'array',
        'merchant_icon' => 'array',
        'is_favorite' => 'boolean',
        'is_have_shadow' => 'boolean',
        'is_enabled' => 'boolean',
        'is_diamond_perks' => 'boolean',
    ];

    public  function vouchers(): HasMany
    {
        return $this->hasMany(Vouchers::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vouchers extends Model
{
    /** @use HasFactory<\Database\Factories\VouchersFactory> */
    use HasFactory;

    protected $fillable = ['image', 'price', 'brand_id', 'slug', 'category'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brands::class);
    }
}

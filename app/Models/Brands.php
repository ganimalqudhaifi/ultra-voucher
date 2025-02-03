<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brands extends Model
{
    /** @use HasFactory<\Database\Factories\BrandsFactory> */
    use HasFactory;

    protected $fillable = ['image', 'title', 'logo', 'discount', 'description', 'snk', 'slug'];

    public  function vouchers(): HasMany
    {
        return $this->hasMany(Vouchers::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promo_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_product')->unique();
            $table->string('code');
            $table->string('name');
            $table->string('product_type');
            $table->string('ultra_voucher');
            $table->text('description');
            $table->text('tnc');
            $table->decimal('nominal', 15, 2);
            $table->string('discount_type');
            $table->decimal('price_list', 15, 2);
            $table->decimal('discount', 15, 2);
            $table->decimal('fix_price', 15, 2);
            $table->decimal('price', 15, 2);
            $table->string('is_idle');
            $table->string('is_promo');
            $table->integer('id_promo');
            $table->integer('qty_limit');
            $table->boolean('is_unlimited');
            $table->boolean('is_bundling');
            $table->integer('stock_available_to_reserve');
            $table->integer('sort');
            $table->integer('initial_stock');
            $table->text('image');
            $table->text('merchant_icon');
            $table->string('merchant_name');
            $table->text('promo')->nullable();
            $table->text('merchant');
            $table->string('slug_url');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('canonical')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_details');
    }
};

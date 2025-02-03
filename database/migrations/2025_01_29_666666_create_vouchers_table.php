<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{

    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('external_id')->nullable()->index();
            
            $table->boolean('is_favorite')->default(false);
            $table->boolean('is_bundling')->nullable();
            $table->string('code')->nullable();
            $table->string('code_2')->nullable();
            $table->string('name')->nullable();
            $table->string('name_2')->nullable();
            $table->text('description')->nullable();
            $table->text('term_and_condition')->nullable();
            $table->string('type')->nullable();
            $table->integer('nominal')->nullable();
            $table->integer('price_list')->nullable();
            $table->string('ultra_voucher')->nullable();
            $table->string('is_show')->nullable();
            $table->string('status')->nullable();
            $table->string('deeplink_url')->nullable();
            $table->integer('redeem_messages')->nullable();
            $table->boolean('is_shareable')->default(false);
            $table->string('slug_url')->nullable();

            $table->json('sku_product_voucher')->nullable();
            $table->json('image')->nullable();
            $table->json('merchant')->nullable();
            $table->json('discount_setup')->nullable();

            $table->integer('voucher_sold')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->boolean('is_diamond_perks')->default(false);
            $table->json('sku_master_voucher')->nullable();
            $table->integer('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->integer('final_price')->nullable();
            $table->json('stock')->nullable();
            $table->integer('count_transaction')->nullable();
            $table->string('created_first_name')->nullable();
            $table->string('created_last_name')->nullable();
            $table->string('modified_first_name')->nullable();
            $table->string('modified_last_name')->nullable();
            $table->json('bundling_items')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical')->nullable();
            $table->foreignId('brand_id')->constrained(
                table: 'brands',
                indexName: 'vouchers_brand_id'
            );

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
}
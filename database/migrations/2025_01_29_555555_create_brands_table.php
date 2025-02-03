<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{

    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('external_id')->nullable()->index();
            
            $table->json('parent_account')->nullable();
            $table->string('corporate_industry')->nullable();
            $table->string('merchant_type')->nullable();
            $table->boolean('is_favorite')->default(false);
            $table->json('price_list')->nullable();
            $table->string('corporate_service')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->integer('count_transaction')->nullable();
            $table->json('account_category')->nullable();
            $table->json('image')->nullable();
            $table->json('background_image')->nullable();
            $table->json('slider_images')->nullable();
            $table->json('background_logo_image')->nullable();
            $table->json('redeem_background_image')->nullable();
            $table->string('accept_uv_payment')->nullable();
            $table->integer('discount')->nullable();
            $table->boolean('is_have_shadow')->default(false);
            $table->json('merchant_icon')->nullable();
            $table->string('nearest_outlet')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->boolean('is_diamond_perks')->default(false);
            $table->string('slug_url')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
}

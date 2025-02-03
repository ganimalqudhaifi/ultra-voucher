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
        Schema::create('highlight_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_merchant');
            $table->string('merchant_name');
            $table->unsignedBigInteger('id_product');
            $table->string('type');
            $table->decimal('price_list', 10, 2);
            $table->string('discount_type');
            $table->decimal('discount', 5, 2);
            $table->decimal('fix_price', 10, 2)->default(0);
            $table->decimal('price', 10, 2);
            $table->boolean('is_favorite')->default(false);
            $table->unsignedBigInteger('image_id_master_image');
            $table->unsignedBigInteger('image_id_master_imageable');
            $table->string('image_url');
            $table->string('image_alt')->nullable();
            $table->string('slug_url');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('canonical');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highlight_details');
    }
};

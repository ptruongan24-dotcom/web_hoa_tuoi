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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên hoa
            $table->decimal('price', 10, 2); // Giá bán
            $table->decimal('old_price', 10, 2)->nullable(); // Giá cũ (để gạch chéo)
            $table->string('image')->nullable(); // Tên file ảnh
            $table->string('badge')->nullable(); // Tag màu hồng (vd: Mua 1 Tặng 1)
            $table->decimal('rating', 2, 1)->default(5.0); // Số sao đánh giá
            $table->string('category')->nullable(); // Phân loại (Hoa cưới, Hoa tặng...)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

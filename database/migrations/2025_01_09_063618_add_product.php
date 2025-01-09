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
            $table->string('name')->nullable(false);
            $table->string('slug')->nullable(false)->unique();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('rental_period')->nullable();
            $table->enum('status', ['active', 'inactive', 'rented', 'sold'])->default('active');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->string('image_url')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('material')->nullable();
            $table->text('description')->nullable();
            $table->enum('condition', ['new', 'used', 'refurbished'])->default('new');
            $table->boolean('is_available')->default(true);
            $table->softDeletes();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('base64_main_image')->nullable(false);
            $table->string('main_text')->nullable(false);
            $table->string('w_icon_1')->nullable(false);
            $table->string('w_icon_2')->nullable(false);
            $table->string('w_icon_3')->nullable(false);
            $table->string('w_title_1')->nullable(false);
            $table->string('w_title_2')->nullable(false);
            $table->string('w_title_3')->nullable(false);
            $table->string('w_description_1')->nullable(false);
            $table->string('w_description_2')->nullable(false);
            $table->string('w_description_3')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};

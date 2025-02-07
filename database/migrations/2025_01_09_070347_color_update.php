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
        Schema::table('colors', function (Blueprint $table) {
            $table->string('slug')->nullable(false);
            $table->string('color_code')->nullable(false);
        });
    }

    public function down(): void
    {
        Schema::table('colors', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('color_code');
        });
    }


};

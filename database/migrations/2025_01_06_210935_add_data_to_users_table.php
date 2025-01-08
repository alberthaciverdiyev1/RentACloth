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
        Schema::table('app_users', function (Blueprint $table) {
            $table->string('email')->nullable(false);
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('base64image')->nullable();
            $table->integer('age')->nullable();
            $table->string('password')->nullable();
            $table->boolean('email_confirmed')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_blocked')->default(true);
            $table->integer('failed_login_attempt')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('app_users', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('name');
            $table->dropColumn('surname');
            $table->dropColumn('base64image');
            $table->dropColumn('password');
            $table->dropColumn('age');
            $table->dropColumn('email_confirmed');
            $table->dropColumn('is_active');
            $table->dropColumn('is_blocked');
            $table->dropColumn('failed_login_attempt');
        });
    }
};

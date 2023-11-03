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
        Schema::table('users', function (Blueprint $table) {
            // remove name, email, email_verified_at, password
            $table->dropColumn('email_verified_at');
            $table->dropColumn('password');

            // add discord_id
            $table->string('discord_id')->unique()->after('email');
            $table->string('nickname', 100)->nullable()->after('discord_id');
            $table->string('avatar')->nullable()->after('nickname');
            $table->string('locale', 5)->nullable()->after('avatar');
            $table->string('token')->nullable()->after('locale');
            $table->string('refresh_token')->nullable()->after('token');
            $table->timestamp('token_expires_at')->nullable()->after('refresh_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

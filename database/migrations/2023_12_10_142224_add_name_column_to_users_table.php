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
            $table->string('lastname')->after('name');
            $table->string('surname')->after('lastname');
            $table->string('phone')->after('email');
            $table->string('login')->unique()->after('phone');
            $table->enum('role',['admin', 'user'])->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->after('name');
            $table->string('surname')->after('lastname');
            $table->string('phone')->after('email');
            $table->string('login')->unique()->after('phone');
            $table->enum('role',['admin', 'user'])->default('user');
        });
    }
};

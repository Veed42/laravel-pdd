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
        Schema::table('statements', function (Blueprint $table) {
            $table->unsignedTinyInteger('status')
                ->after('description_trespassing')
                ->nullable(false)
                ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('statements', function (Blueprint $table) {
            $table->unsignedTinyInteger('status')
                ->after('description_trespassing')
                ->nullable(false)
                ->default(0);
        });
    }
};

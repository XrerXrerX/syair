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
        Schema::create('syairs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasaran_id');
            $table->foreignId('user_id');
            $table->string('nm_pasar');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->date('datepost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syairs');
    }
};

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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('idCategori');
            $table->unsignedBigInteger('idStatu');
            $table->foreign('idStatu')->references('idStatu')->on('status');
            $table->string('title', 80)->unique();
            $table->string('slug', 160);
            $table->string('description', 130)->nullable();
            $table->date('date');
            $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

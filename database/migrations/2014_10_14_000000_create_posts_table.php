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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('idPost');
            $table->unsignedBigInteger('idStatu');
            $table->foreign('idStatu')->references('idStatu')->on('status');
            $table->unsignedBigInteger('idUser')->nullable();
            $table->foreign('idUser')->references('idUser')->on('users')->onDelete('set null');
            $table->string('title', 85)->unique();
            $table->string('slug', 160);
            $table->string('image', 255);
            $table->unsignedBigInteger('idCategori')->nullable();
            $table->foreign('idCategori')->references('idCategori')->on('categories')->onDelete('set null');
            $table->string('description', 130);
            $table->longText('content');
            $table->date('date');
            $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

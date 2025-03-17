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
        Schema::create('roles', function (Blueprint $table) {
            $table->id('idRole');
            $table->unsignedBigInteger('idStatu');
            $table->foreign('idStatu')->references('idStatu')->on('status');
            $table->string('name',20)->unique();
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
        Schema::dropIfExists('roles');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id('idUser');
            $table->unsignedBigInteger('idStatu');
            $table->foreign('idStatu')->references('idStatu')->on('status');
            $table->unsignedBigInteger('idRole');
            $table->foreign('idRole')->references('idRole')->on('roles');
            $table->string('name',40)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->date('date');
            $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

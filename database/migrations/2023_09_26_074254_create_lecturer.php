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
        Schema::create('lecturer', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dosen');
            $table->string('nama_dosen');
            $table->string('email_dosen');
            $table->unsignedInteger('kode_mk');
            $table->foreign('kode_mk')->references('id')->on('subject');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer');
    }
};

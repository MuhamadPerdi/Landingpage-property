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
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->text('deskripsi1');
            $table->string('title2');
            $table->text('deskripsi2');
            $table->string('title3');
            $table->text('deskripsi3');
            $table->string('title4');
            $table->text('deskripsi4');
            $table->string('title5');
            $table->text('deskripsi5');
            $table->string('title6');
            $table->text('deskripsi6');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};

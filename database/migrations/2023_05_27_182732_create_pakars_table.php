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
        Schema::create('pakars', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama');
            $table->string('username');
            $table->string('password');
            $table->string('no_telepon');
            $table->char('regencies_id');
            $table->string('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('instansi');
            $table->string('cv');
            $table->string('portofolio');
            $table->foreign('regencies_id')->references('id')->on('regencies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakars');
    }
};

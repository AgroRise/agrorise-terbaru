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
            $table->string('username');
            $table->string('password');
            $table->string('no_telepon');
            $table->text('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('instansi');
            $table->text('alamat_instansi');
            $table->binary('cv');
            $table->binary('sertifikat');
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

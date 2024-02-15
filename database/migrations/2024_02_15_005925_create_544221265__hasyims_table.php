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
        Schema::create('544221265__hasyims', function (Blueprint $table) {
            $table->id();
            $table->string('namasiswa');

            $table->string('kls');
            $table->integer('nis');
            $table->enum('jurusan', ['RPL', 'TKJ', 'TEL', 'DBP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_544221265__hasyims');
    }
};

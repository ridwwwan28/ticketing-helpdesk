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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('no_tiket')->unique();
            $table->string('username');
            $table->string('tipe_komplain', length: 100)->nullable();
            $table->text('kendala');
            $table->text('detail_penyelesaian')->nullable();
            $table->timestamps();
            $table->string('status', length: 10)->default('MENUNGGU');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};

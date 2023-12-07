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
        Schema::create('earthquake_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kejadian');
            $table->longText('deskripsi');
            $table->integer('kedalaman');
            $table->float('magnitude');
            $table->timestamp('waktu_kejadian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earthquake_report');
    }
};

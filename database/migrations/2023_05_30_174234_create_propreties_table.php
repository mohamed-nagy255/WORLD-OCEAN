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
        Schema::create('propreties', function (Blueprint $table) {
            $table->id();
            $table->string('name_proprety');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offers') 
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propreties');
    }
};

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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->integer('day_cont');
            $table->tinyinteger('spcial') -> default('0') -> comment('0=normal, 1=spcial');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries') 
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories') 
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};

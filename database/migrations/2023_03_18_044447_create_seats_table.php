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
        Schema::create('seats', function (Blueprint $table) {
            $table->id('seatid');
            $table->boolean('seat1');
            $table->boolean('seat2');
            $table->boolean('seat3');
            $table->boolean('seat4');
            $table->boolean('seat5');
            $table->boolean('seat6');
            $table->boolean('seat7');
            $table->boolean('seat8');
            $table->boolean('seat9');
            $table->boolean('seat10');
                    
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('cid')->on('clientusers');

            $table->unsignedBigInteger('c_id');
            $table->foreign('c_id')->references('cid')->on('cinemas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};

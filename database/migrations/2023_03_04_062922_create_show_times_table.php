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
        Schema::create('show_times', function (Blueprint $table) {
            $table->id('stid');
            $table->unsignedBigInteger('mid');
            $table->foreign('mid')->references('mid')->on('movies');

            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('cid')->on('cinemas');

            $table->string('Starttime',80);
            $table->string('endtime',80);
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_times');
    }
};

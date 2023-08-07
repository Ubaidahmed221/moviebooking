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
        Schema::create('movies', function (Blueprint $table) {
            $table->id('mid');
            $table->string('mtitle',60);
            $table->string('mdesc',260);
            $table->string('mimg',270);
            $table->string('mvedio',280);
            $table->datetime('mstart');
            $table->datetime('mend');
            $table->unsignedBigInteger('mcid');
            $table->foreign('mcid')->references('mcid')->on('movie_cats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

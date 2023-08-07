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
        Schema::create('clientusers', function (Blueprint $table) {
            $table->id('cid');
            $table->string('cname',50);
            $table->string('email',35)->unique();
            $table->string('password',10);
            $table->string('phone',15);
            $table->string('address',150);




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientusers');
    }
};

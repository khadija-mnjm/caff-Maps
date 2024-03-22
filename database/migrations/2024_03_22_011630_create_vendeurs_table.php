<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->id();
            $table->string('NomV');
            $table->string('PrénomV');
            $table->string('EmailV')->unique();
            $table->string('mot_de_passV');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendeurs');
    }
};

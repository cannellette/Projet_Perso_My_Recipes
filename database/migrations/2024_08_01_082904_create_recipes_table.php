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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cookbook_id');
            $table->string('title');
            $table->string('page')->nullable(); // Permet NULL si la page n'est pas toujours spécifiée
            $table->string('ingredient1')->nullable();
            $table->string('ingredient2')->nullable();
            $table->string('ingredient3')->nullable();
            $table->string('ingredient4')->nullable();
            $table->string('ingredient5')->nullable();
            $table->timestamps();
    
            // Ajout de la clé étrangère
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};

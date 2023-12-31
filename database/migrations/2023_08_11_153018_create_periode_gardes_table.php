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
        Schema::create('periode_gardes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pharmacie');
            $table->foreign('id_pharmacie')->references('id')->on('pharmacies')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jour');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodes_garde');
    }
};

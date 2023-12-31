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
        Schema::create('service_centres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_centre_sante');
            $table->foreign('id_centre_sante')->references('id')->on('centre_santes');
            $table->unsignedBigInteger('id_service_sante');
            $table->foreign('id_service_sante')->references('id')->on('service_santes');
            $table->string('nom');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_centres');
    }
};

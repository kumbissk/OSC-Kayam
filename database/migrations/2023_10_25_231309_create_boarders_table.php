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
        Schema::create('boarders', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('situation_matrimoniale');
            $table->date('date_entree');
            $table->date('date_sortie')->nullable();
            $table->integer('nombre_enfants')->nullable();
            $table->string('tranche_age_enfants')->nullable();
            $table->string('lieu_residence')->nullable();
            $table->string('formes_violence_identifiees')->nullable();
            $table->text('recit_histoire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarders');
    }
};

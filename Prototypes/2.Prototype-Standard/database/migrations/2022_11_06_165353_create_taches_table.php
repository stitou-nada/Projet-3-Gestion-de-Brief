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
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string("Nom_de_la_tache")->nullable();
            $table->timestamp("Debut_de_la_tache")->nullable();
            $table->timestamp("Fin_de_la_tache")->nullable();
            $table->foreignId("brief_id")
            ->referance('id')
            ->on('promotion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taches');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logements', function (Blueprint $table) {
            $table->id('num_lgmt');
            $table->string('apropos');
            $table->string('prix_lgmt');
            $table->foreignId('id_agence')->constrained('agences','id_agence');
            $table->foreignId('id_cite')->constrained('cites','id_cite');
            $table->foreignId('num_terrain')->constrained('terrains','num_terrain');
            $table->boolean('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logements');
    }
}

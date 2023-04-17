<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenirs', function (Blueprint $table) {
            $table->id('id_contenir');
            $table->foreignId('id_achat')->constrained('achats','id_achat');
            $table->foreignId('num_lgmt')->constrained('logements','num_lgmt');
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
        Schema::dropIfExists('contenirs');
    }
}

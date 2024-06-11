<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // The following is the equivalent MySQL query:
        // CREATE TABLE trains (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     azienda VARCHAR(255) NOT NULL,
        //     stazione_di_partenza VARCHAR(255) NOT NULL,
        //     stazione_di_arrivo VARCHAR(255) NOT NULL,
        //     orario_di_partenza DATETIME NOT NULL,
        //     orario_di_arrivo DATETIME NOT NULL,
        //     codice_treno VARCHAR(255) UNIQUE NOT NULL,
        //     numero_carrozze INT NOT NULL,
        //     in_orario BOOLEAN DEFAULT TRUE,
        //     cancellato BOOLEAN DEFAULT FALSE,
        //     created_at TIMESTAMP NULL DEFAULT NULL,
        //     updated_at TIMESTAMP NULL DEFAULT NULL
        // );

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_treno')->unique();
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
}

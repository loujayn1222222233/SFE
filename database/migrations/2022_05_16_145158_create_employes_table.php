<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('mot_de_passe');
            $table->integer('cin');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('sexe');
            $table->Date('date_nais');
            $table->decimal ('tel',9);
            $table->decimal ('ncnss'); 
 
            $table->string('role');
            $table->string('grade');
            $table->integer('salaire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}

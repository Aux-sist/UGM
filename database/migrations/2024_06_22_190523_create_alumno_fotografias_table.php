<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoFotografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_fotografias', function (Blueprint $table) {
            $table->id();

            $table->string("_nombre",30);
            $table->string("_curp",25);
            $table->string("_idnivel",20);
            $table->string("_plantel",20);
            $table->string("nombre_foto",45);

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
        Schema::dropIfExists('alumno_fotografias');
    }
}

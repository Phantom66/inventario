<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienNacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bien_nacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_bien');
            $table->string('nombre',45);
            $table->string('marca',45)->nullable();
            $table->string('modelo',45)->nullable();
            $table->string('color',45)->nullable();
            $table->string('serial',45);
            $table->date('fec_adquisicion');
            $table->string('valor',45)->nullable();
            $table->integer('unidad_id')->unsigned();
            $table->integer('persona_id')->unsigned();
            $table->integer('estatus_bien_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('unidad_id')->references('id')->on('unidads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estatus_bien_id')->references('id')->on('estatuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
           
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
        //
        Schema::dropIfExists('bien_nacionals');
    }
}

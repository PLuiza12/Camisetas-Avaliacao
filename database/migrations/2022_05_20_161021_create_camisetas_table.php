<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamisetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camisetas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('marca');
            $table->string('tecido');
            $table->string('cor');
            $table->string('tamanho');
            $table->string('pagamento');
            $table->decimal('codigo_de_barras');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camisetas');
    }
}

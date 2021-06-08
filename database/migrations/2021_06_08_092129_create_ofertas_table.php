<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('user_image');
            $table->string('user_image_2');
            $table->string('user_image_3');
            $table->date('plazo_preparacion_pedido');
            $table->string('localidad_recogida');
            $table->string('cp_recogida');
            $table->boolean('embalaje_original');
            $table->string('provider');
            $table->string('portes');
            $table->double('invoice_cost_price');
            $table->date('buyed_date');
            $table->double('boxes');
            $table->string('offer');
            $table->string('new');
            $table->date('offer_until');
            $table->double('offer_prize');
            $table->string('definition');
            $table->integer('porte_id');
            $table->string('net_price');
            $table->string('categoria_oferta');
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('ofertas');
    }
}

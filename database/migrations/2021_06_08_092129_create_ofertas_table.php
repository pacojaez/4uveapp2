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
            $table->string('net_price');
            $table->string('categoria_oferta');
            $table->boolean('active')->default(false);
            $table->tinyInteger('porte_id')->default(1);
            $table->uuid('user_id');
            $table->uuid('product_id');
            $table->timestamps();

            // /*@ Connect comment table's post_id with portes table's id field */
            // $table->foreign('porte_id')->references('id')->on('portes')->onDelete('cascade');
            // /*@ Connect comment table's products with post table's id field */
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // /*@ Connect comment table's users with post table's id field */
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->engine = 'InnoDB';
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

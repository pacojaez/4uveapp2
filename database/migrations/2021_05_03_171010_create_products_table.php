<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('description');
            $table->string('short_description')->nullable();

            $table->string('product_image')->nullable();
            $table->string('product_image_2')->nullable();
            $table->string('product_image_3')->nullable();

            $table->string('part_number')->nullable();
            $table->string('brand')->nullable();
            $table->string('EAN13_individual')->nullable();
            $table->double('net_price')->nullable();

            $table->string('pack_units')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('EAN13_box_1')->nullable();

            $table->string('pack_unit_box_2')->nullable();
            $table->string('dimensions_box_2')->nullable();
            $table->decimal('wieght_box_2')->nullable();
            $table->string('EAN13_box_2')->nullable();

            $table->string('pack_unit_box_3')->nullable();
            $table->string('dimensions_box_3')->nullable();
            $table->decimal('wieght_box_3')->nullable();
            $table->string('EAN13_box_3')->nullable();

            $table->string('portes')->nullable();
            $table->boolean('active')->default(0);

            $table->uuid('user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('subcategorie_id')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}

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
            $table->string('lote_image')->nullable();
            $table->string('part_number')->nullable();
            $table->string('cb_unit')->nullable();
            $table->string('brand')->nullable();
            $table->string('pack_units')->nullable();
            $table->date('buyed_date')->nullable();
            $table->decimal('invoice_cost_price', 8, 2)->nullable();
            $table->string('weight')->nullable();
            $table->string('provider')->nullable();
            $table->decimal('boxes')->nullable();
            $table->string('dimensions_boxes')->nullable();
            $table->string('portes')->nullable();
            $table->boolean('offer')->default(false);
            $table->boolean('new')->default(false);
            $table->boolean('original_box')->default(false);
            $table->date('offer_until');

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

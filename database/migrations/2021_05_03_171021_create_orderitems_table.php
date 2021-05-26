<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {

            $table->id();
            $table->decimal('total_items', 4, 2);
            $table->decimal('units', 3, 2);
            $table->decimal('unit_price', 3, 2);
            $table->uuidMorphs('user');
            $table->unsignedBigInteger('order_id');
            $table->uuidMorphs('product');
            // $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('order_items');
    }
}


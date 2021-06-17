<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->rememberToken();
            $table->string('surname')->nullable();
            $table->string('company')->nullable();
            $table->string('comercial_name')->nullable();
            $table->string('CIF')->nullable();
            $table->string('adress')->nullable();
            $table->string('city')->nullable();
            $table->integer('cp')->nullable();
            $table->string('province')->nullable();
            $table->string('tipo_usuario')->nullable();
            $table->boolean('isAdmin')->default(0);
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->enum('role', ['Admin', 'Manager', 'User'] );
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
        Schema::dropIfExists('users');
    }
}

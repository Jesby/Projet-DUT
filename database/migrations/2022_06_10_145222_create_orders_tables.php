<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_tables', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('noms');
            $table->string('prenoms');
            $table->string('email');
            $table->string('number');
            $table->string('addresse1');
            $table->string('addresse2');
            $table->string('ville');
            $table->string('residence');
            $table->string('pays');
            $table->string('codepin');
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
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
        Schema::dropIfExists('orders_tables');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candy', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string("candy_img");
            $table->string("candy_name");
            $table->float("candy_price");
            $table->integer("candy_quantity");
            $table->string("candy_des");
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
        Schema::dropIfExists('candy');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swamps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('district_id');
            $table->string('name');
            $table->integer('amount');
            $table->string('bank_account');
            $table->string('status');
            $table->string('comment');
            $table->string('location');
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
        Schema::dropIfExists('swamps');
    }
}

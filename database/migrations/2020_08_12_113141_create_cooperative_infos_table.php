<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCooperativeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperative_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certificate');
            $table->string('services');
            $table->string('names');
            $table->string('email');
            $table->string('phone');
            $table->string('leader');
            $table->string('location');
            $table->string('status');
            $table->string('cooperative_id');
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
        Schema::dropIfExists('cooperative_infos');
    }
}

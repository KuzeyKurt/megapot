<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournment_discipline', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('discipline_id');
            $table->unsignedBigInteger('tournment_id');
            $table->timestamps();

            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
            $table->foreign('tournment_id')->references('id')->on('tournments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournment_discipline');
    }
};

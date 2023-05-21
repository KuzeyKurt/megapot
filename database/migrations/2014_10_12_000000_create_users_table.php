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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments();
        //     $table->string('name');
        //     $table->string('phone')->unique();
        //     $table->integer('age')->nullable();
        //     $table->string('password');
        //     $table->id('team_id')->nullable();
        //     $table->id('discipline_id')->nullable();
        //     $table->timestamp('created_at');
        //     $table->timestamp('updated_at');
        // });
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
};

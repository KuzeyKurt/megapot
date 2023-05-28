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
        Schema::table('venues', function (Blueprint $table) {
            $table->string('image_link')->nullable()->default('images/default-cc.jpg');
        });

        // Schema::table('posts', function (Blueprint $table) {
        //     $table->string('image_link')->nullable()->default('images/default-new.jpg');
        // });

        // Schema::table('teams', function (Blueprint $table) {
        //     $table->string('image_link')->default()->nullable()->default('images/default-team.jpg');
        // });

        Schema::table('user_tests', function (Blueprint $table) {
            $table->string('image_link')->default()->nullable()->default('images/default-user.jpg');
        });

        Schema::table('applicants', function (Blueprint $table) {
            $table->string('image_link')->default()->nullable()->default('images/default-sponsor.jpg');
        });

        Schema::table('tournments', function (Blueprint $table) {
            $table->string('image_link')->default()->nullable()->default('images/default-tournment.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

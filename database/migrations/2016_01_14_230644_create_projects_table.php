<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->text('description');
            $table->integer('min_sm');
            $table->integer('max_sm');
            $table->dateTime("start_at");
            $table->dateTime("end_at");
            $table->dateTime("deleted_at");
            $table->boolean("closed")->default(false);
            $table->boolean("deleted")->default(false);
            $table->integer("currency_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->integer("categorie_id")->unsigned();
            $table->integer("type_id")->unsigned()->nullable();;
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
        Schema::drop('projects');
    }
}

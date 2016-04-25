<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->text("detail");
            $table->text("price");
            $table->datetime("deliver_at");
            $table->integer("project_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->integer("currency_id")->unsigned();
            $table->boolean("is_sponsor")->default(false);
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
        Schema::drop('bids');
    }
}

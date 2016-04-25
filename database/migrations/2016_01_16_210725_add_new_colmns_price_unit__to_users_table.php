<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColmnsPriceUnitToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text("slug");
            $table->text("description");
            $table->integer("amount_by_hour")->unsigned()->default(5);
            $table->integer("currency_id")->unsigned();
            $table->string("img")->default("img/default-user.png");
            $table->string("cover")->default("img/default-cover.png");
            $table->string("ip");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn("slug");
            $table->dropColumn("description");
            $table->dropColumn("amount_by_hour");
            $table->dropColumn("currency_id");
            $table->dropColumn("img");
            $table->dropColumn("cover");
            $table->dropColumn("ip");
            
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacebookIdToLuckyDrawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lucky_draws', function (Blueprint $table) {
            $table->string('facebook_id')->nullable();
            $table->string('facebook_name')->nullable();
            $table->integer('day_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lucky_draws', function (Blueprint $table) {
            $table->dropColumn('facebook_id');
            $table->dropColumn('facebook_name');
            $table->dropColumn('day_no');
        });
    }
}

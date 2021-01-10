<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_management', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('nationality');
            $table->string('designation');
            $table->text('education');
            $table->text('experience');
            $table->string('email');
            $table->string('contact_number');
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
        Schema::dropIfExists('key_management');
    }
}

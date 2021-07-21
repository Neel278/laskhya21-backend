<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaineventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainevents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->integer('price');
            $table->string('name');
            $table->string('img');
            $table->string('big_img');
            $table->string('rulebook');
            $table->string('allevents_id');
            $table->string('platform');
            $table->string('participants');
            $table->text('overview');
            $table->text('event_structure');
            $table->text('rules');
            $table->text('criteria');
            $table->text('rewards');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mainevents');
    }
}

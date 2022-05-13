<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company_name");
            $table->string("departures_station");
            $table->string("arrivals_station");
            $table->dateTime("departures_time");
            $table->dateTime("arrivals_time");
            $table->smallInteger("train_code");
            $table->tinyInteger("number_of_carriages");
            $table->boolean("is_in_time");
            $table->boolean("is_deleted");
            $table->date("departures_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string("from_location",35);
            $table->string("to_location",35);
            $table->dateTime("from_time");
            $table->dateTime("to_time");
            $table->integer("duration");
            $table->float("price");
            $table->float("total");
            $table->unsignedBigInteger("service_id");
            $table->foreign('service_id')->on("services")->references("id")->cascadeOnDelete();
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
        Schema::dropIfExists('prices');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['cars', 'hotels','flights']);
            $table->string("description",100);
            $table->string("locations")->nullable();
            $table->string("from_location",35)->nullable();
            $table->string("to_location",35)->nullable();
            $table->dateTime("from_time");
            $table->dateTime("to_time");
            $table->integer("duration");
            $table->enum('room_type', ['one', 'two',"three"])->nullable();//hotel
            $table->integer("number_of_adults")->nullable();//hotel
            $table->integer("number_of_children")->nullable();//hotel
            $table->integer("seat_numbers")->nullable();//flight
            $table->enum('trip_type', ['one_way', 'two_way'])->nullable();//flights
            $table->enum('class_type', ['first_class', 'economy_class'])->nullable();
            $table->unsignedBigInteger("contact_id");
            $table->foreign('contact_id')->on("contacts")->references("id")->cascadeOnDelete();
            $table->unsignedBigInteger("availabilty_id");
            $table->foreign('availabilty_id')->on("availabilties")->references("id")->cascadeOnDelete();
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
        Schema::dropIfExists('services');
    }
}

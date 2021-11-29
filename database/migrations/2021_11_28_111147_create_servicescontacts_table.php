<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicescontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicescontacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_id");
            $table->foreign("service_id")->references("id")->on("services")->cascadeOnDelete();
            $table->unsignedBigInteger("contact_id");
            $table->foreign("contact_id")->references("id")->on("contacts")->cascadeOnDelete();
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
        Schema::dropIfExists('servicescontacts');
    }
}

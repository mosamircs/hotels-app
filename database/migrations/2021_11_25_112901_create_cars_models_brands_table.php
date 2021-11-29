<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsModelsBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_models_brands', function (Blueprint $table) {
            $table->id();
            $table->string("model_name",30);
            $table->string("brand_name",30);
            $table->year("model_year");
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
        Schema::dropIfExists('cars_models_brands');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('plant_fuel_factor');
            $table->string('cum_prod_ob');
            $table->string('cum_prod_coal');
            $table->string('cum_fuel');
            $table->string('join_survey');
            $table->string('project_id');
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
        Schema::dropIfExists('prod_parameters');
    }
}

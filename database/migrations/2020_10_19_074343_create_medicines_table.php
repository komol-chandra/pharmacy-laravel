<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id('med_id');
            $table->string('med_name');
            $table->integer('med_cat_id')->unsigned();
            $table->integer('med_sub_cat_id')->unsigned()->nullable();
            $table->integer('med_type_id')->unsigned();
            $table->integer('med_gen_id')->unsigned();
            $table->integer('med_manuf_id')->unsigned();
            $table->integer('med_unit_id')->unsigned();
            $table->string('med_image')->nullable();
            $table->string('med_sku')->nullable();
            $table->string('med_barcode')->nullable();
            $table->integer('med_vat')->nullable();
            $table->integer('med_tax')->nullable();
            $table->string('med_details')->nullable();
            $table->string('med_single_weight')->nullable();
            $table->string('med_box_weight')->nullable();
            $table->string('med_per_box')->nullable();
            $table->string('med_mini_unit')->nullable();
            $table->string('med_location')->nullable();

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
        Schema::dropIfExists('medicines');
    }
}

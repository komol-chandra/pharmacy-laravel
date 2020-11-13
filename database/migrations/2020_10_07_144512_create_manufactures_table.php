<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufactures', function (Blueprint $table) {
            $table->id('manufac_id');
            $table->string('manufac_name',100);
            $table->string('manufac_mobile',100)->unique();
            $table->string('manufac_email')->unique()->nullable();
            $table->string('manufac_address');
            $table->string('manufac_details')->nullable();
            $table->integer('manufac_balance');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('manufactures');
    }
}

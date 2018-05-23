<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->string('measurement');
            $table->integer('total_count');
            $table->integer('bought_count');
            $table->bigInteger('bought_unit_price');
            $table->integer('sold_count');
            $table->decimal('sold_price');
            $table->decimal('sold_weight');
            $table->integer('death_count');
            $table->integer('birth_count');
            $table->bigInteger('profit');
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
        Schema::dropIfExists('animals');
    }
}

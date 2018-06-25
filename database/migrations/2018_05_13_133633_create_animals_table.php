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
            $table->boolean('is_bought');
            $table->date('bought_date');
            $table->bigInteger('bought_unit_price');
            $table->boolean('is_sold');
            $table->date('sold_date');
            $table->decimal('sold_price');
            $table->decimal('sold_weight');
            $table->integer('is_death');
            $table->date('death_date');
            $table->boolean('birth_date');
            $table->bigInteger('profit');
            $table->boolean('active');
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

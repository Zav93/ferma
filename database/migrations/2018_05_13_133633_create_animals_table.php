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
            $table->integer('measurement_id');
            $table->integer('count');
            $table->date('bought_date')->nullable();
            $table->bigInteger('bought_price')->nullable();
            $table->date('sold_date')->nullable();
            $table->decimal('sold_price')->nullable();
            $table->decimal('sold_weight')->nullable();
            $table->date('death_date')->nullable();
            $table->date('birth_date')->nullable();
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakersTable extends Migration
{

    public $autoincrement = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makers', function (Blueprint $table) {

            $table->integer('id')->unsigned(); // to remove primary key
            $table->primary('id'); //to add primary key
            $table->timestamps();
            $table->string('japanese_name');
            $table->string('japanese_kana_name');
            $table->string('alphabet_name');
            $table->integer('order_no');
            $table->text('description');
            $table->string('logo_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makers');
    }
}

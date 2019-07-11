<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThumbnailForeignkeyShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shoes', function (Blueprint $table) {
            $table->bigInteger('thumbnail_id')->nullable()->unsigned()->change();
            $table->foreign('thumbnail_id')->references('id')->on('thumbnails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shoes', function (Blueprint $table) {
            $table->dropForeign('shoes_thumbnail_id_foreign');
            $table->bigInteger('thumbnail_id')->unsigned()->change();
        });
    }
}

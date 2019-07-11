<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnNameGroupThumbnailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('thumbnails', function (Blueprint $table)
       {
         $table->dropColumn(['name', 'group']);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('thumbnails', function (Blueprint $table)
      {
        $table->string('name');
        $table->string('group');
      });
    }
}

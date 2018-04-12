<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function ( $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('description');
            $table->string('img')->nullable();
            $table->integer('sub_item')->nullable();
            $table->integer('cate_id')->unsigned();
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
        Schema::drop('items');
    }
}

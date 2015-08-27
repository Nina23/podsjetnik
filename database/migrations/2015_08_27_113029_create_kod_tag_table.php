<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKodTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kod_tags', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kod_id')->unsigned();
            $table->integer('tag_id')->unsigned();
        });

        Schema::table('kod_tags', function(Blueprint $table) {
            $table->foreign('kod_id')->references('id')->on('kods')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('kod_tags', function(Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kod_tags', function(Blueprint $table) {
            $table->dropForeign('kod_tags_kod_id_foreign');
        });

        Schema::table('kod_tags', function(Blueprint $table) {
            $table->dropForeign('kod_tags_tag_id_foreign');
        });

        Schema::drop('kod_tags');
    }
}

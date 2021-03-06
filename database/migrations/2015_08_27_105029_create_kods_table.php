<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kods', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->text('summary');
            $table->text('content');
            $table->integer('user_id')->unsigned();
        });

        Schema::table('kods', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::table('kods', function(Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });

        Schema::drop('kods');
    }
}

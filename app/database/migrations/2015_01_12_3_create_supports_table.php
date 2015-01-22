<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupportsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('supports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('message');
            $table->string('email');
            $table->date('date');
            $table->integer('schools_id')->unsigned()->index();
            $table->foreign('schools_id')->references('id')->on('schools')->onDelete('no action');
            $table->engine = 'InnoDB';
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('supports');
    }

}

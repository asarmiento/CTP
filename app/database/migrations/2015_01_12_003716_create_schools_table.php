<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('schools', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('charter',5);
            $table->string('circuit');
            $table->string('code');
            $table->string('ffinancing');
            $table->string('president');
            $table->string('secretary');
            $table->string('account');
            $table->string('title_1');
            $table->string('title_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('schools');
    }

}

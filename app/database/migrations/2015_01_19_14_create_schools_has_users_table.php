<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsHasUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('schools_has_users', function(Blueprint $table) {
            $table->integer('schools_id')->unsigned()->index();
            $table->foreign('schools_id')->references('id')->on('schools')->onDelete('no action');
            $table->integer('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('no action');
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
        Schema::drop('schools_has_users');
    }

}

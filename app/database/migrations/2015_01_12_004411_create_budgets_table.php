<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBudgetsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('budgets', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('source');
            $table->text('description');
            $table->string('year',4);
            $table->enum('type',['ordinario','extraordinario']);
            $table->string('global');
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
        Schema::drop('budgets');
    }

}

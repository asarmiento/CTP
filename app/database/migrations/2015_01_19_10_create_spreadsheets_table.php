<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpreadsheetsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('spreadsheets', function(Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('year',4);
            $table->date('date');
            $table->integer('budgets_id')->unsigned()->index();
            $table->foreign('budgets_id')->references('id')->on('budgets')->onDelete('no action');
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
        Schema::drop('spreadsheets');
    }

}

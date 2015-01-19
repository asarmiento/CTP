<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBalanceBudgetsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('balance_budgets', function(Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount', 30, 2);
            $table->string('year',4);
            $table->string('policies');
            $table->string('oStrategic');
            $table->string('oOperational');
            $table->string('goals');
            $table->integer('budgets_id')->unsigned()->index();
            $table->foreign('budgets_id')->references('id')->on('budgets')->onDelete('no action');
            $table->integer('catalogs_id')->unsigned()->index();
            $table->foreign('catalogs_id')->references('id')->on('catalogs')->onDelete('no action');
            $table->integer('budget_types_id')->unsigned()->index();
            $table->foreign('budget_types_id')->references('id')->on('budget_types')->onDelete('no action');
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
        Schema::drop('balance_budgets');
    }

}

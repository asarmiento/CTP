<?php

class BalanceBudgetsTableSeeder extends Seeder {

    public function run() {
        BalanceBudget::create([
            'id' => 1,
            'amount' => '56113638.05',
            'year' => '2014',
            'budgets_id' => 1,
            'catalogs_id' => 2,
            'budget_types_id' => 1
        ]);
        BalanceBudget::create([
            'id' => 2,
            'amount' => '2000000.00',
            'year' => '2014',
            'budgets_id' => 1,
            'catalogs_id' => 11,
            'budget_types_id' => 1
        ]);
        BalanceBudget::create([
            'id' => 3,
            'amount' => '9000000.00',
            'year' => '2014',
            'budgets_id' => 1,
            'catalogs_id' => 12,
            'budget_types_id' => 1
        ]);
    }

}

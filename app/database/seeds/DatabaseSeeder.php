<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('TypeUsersTableSeeder');
        $this->call('SchoolsTableSeeder');
        $this->call('SuppliersTableSeeder');
        $this->call('BudgetTypesTableSeeder');
        $this->call('GroupsTableSeeder');
        $this->call('CatalogsTableSeeder');
        $this->call('BudgetsTableSeeder');
        $this->call('SpreadsheetsTableSeeder');
        $this->call('BalanceBudgetsTableSeeder');
        $this->call('ChecksTableSeeder');
        // $this->call('TransfersTableSeeder');   
        //$this->call('UserTableSeeder');
    }

}

<?php


class SpreadsheetsTableSeeder extends Seeder {

	public function run()
	{
		Spreadsheet::create([
                    'number'=>'1',
                    'year'=>'2014',
                    'date'=>'2014-04-04',
                    'budgets_id'=>1
			]);
	}

}
<?php

class ChecksTableSeeder extends Seeder {

	public function run()
	{
	
			Check::create([
                            'bill'=>'85209406',
                            'concept'=>'Mes de enero, electrico',
                            'amount'=>'689671.00',
                            'retention'=>'0.00',
                            'ckbill'=>'aut',
                            'ckretention'=>'--',
                            'record'=>'07/10',
                            'date'=>'0000-00-00',
                            'spreadsheets_id'=>1,
                            'suppliers_id'=>2,
                            'balance_budgets_id'=>3
			]);
	}

}
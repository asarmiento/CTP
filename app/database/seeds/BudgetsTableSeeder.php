<?php


class BudgetsTableSeeder extends Seeder {

	public function run()
	{
		
			Budget::create([
                            'id'=>1,
                            'name'=>'Ley 6746',
                            'source'=>'LEY 6746 FONDO GENERAL PARA JUNTAS DE EDUCACIÓN Y ADMINISTRATIVAS',
                            'description'=>'',
                            'year'=>'2014',
                            'type'=>'ordinario',
                            'global'=>'',
                            'schools_id'=>1
			]);
	}

}
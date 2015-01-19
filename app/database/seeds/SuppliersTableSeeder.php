<?php

class SuppliersTableSeeder extends Seeder {

	public function run()
	{
	
			Supplier::create([
                            'id'=>1,
                            'charter'=>'1-11320-776',
                            'name'=>'Stephanie Robles Ortega',
                            'phone'=>'2785-2529',
                            'email'=>'roblesteph@hotmail.com'
			]);
                        Supplier::create([
                            'id'=>2,
                            'charter'=>'77845452',
                            'name'=>'ICE',
                            'phone'=>'2245-5568',
                            'email'=>'user@mail.com'
			]);
	}

}
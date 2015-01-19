<?php


class GroupsTableSeeder extends Seeder {

	public function run()
	{
	
			Group::create([
                            'id'=>1,
                            'code'=>'1',
                            'name'=>'INGRESOS CORRIENTES'
                            
			]);
                        Group::create([
                            'id'=>2,
                            'code'=>'2',
                            'name'=>'INGRESOS DE CAPITAL'
                            
			]);Group::create([
                            'id'=>3,
                            'code'=>'0',
                            'name'=>'REMUNERACIONES'
                            
			]);Group::create([
                            'id'=>4,
                            'code'=>'1',
                            'name'=>'SERVICIOS'
                            
			]);Group::create([
                            'id'=>5,
                            'code'=>'2',
                            'name'=>'MATERIALES Y SUMINISTROS'
                            
			]);Group::create([
                            'id'=>6,
                            'code'=>'5',
                            'name'=>'BIENES DURADEROS'
                            
			]);
                        Group::create([
                            'id'=>7,
                            'code'=>'6',
                            'name'=>'TRANSFERENCIAS CORRIENTES'
                            
			]);
                        Group::create([
                            'id'=>8,
                            'code'=>'7',
                            'name'=>'SUMINISTROS'
                            
			]);
                        Group::create([
                            'id'=>9,
                            'code'=>'3',
                            'name'=>'FINANCIAMIENTO'
                            
			]);
	}

}
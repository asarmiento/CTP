<?php

class SchoolsTableSeeder extends Seeder {

	public function run()
	{
		
			School::create([
                            'id'=>1,
                            'name'=>'COLEGIO TECNICO PROFESIONAL DE QUEPOS',
                            'charter'=>'3-008-056720',
                            'circuit'=>'01',
                            'code'=>'5748',
                            'ffinancing'=>'LEY 6746 FONDO GENERAL PARA JUNTAS DE EDUCACIÓN Y ADMINISTRATIVAS',
                            'president'=>'',
                            'secretary'=>'',
                            'account'=>'',
                            'title_1'=>'MINISTERIO DE EDUCACIÓN PÚBLICA',
                            'title_2'=>'DIRECCIÓN REGIONAL DE EDUCACIÓN DE AGUIRRE'
			]);
	}

}
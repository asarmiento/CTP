<?php

class BudgetTypesTableSeeder extends Seeder {

    public function run() {

        BudgetType::create([
            'id' => 1,
            'name' => 'Colegio (III y IV Ciclo)'
        ]);
        BudgetType::create([
            'id' => 2,
            'name' => 'Preescolar'
        ]);
        BudgetType::create([
            'id' => 3,
            'name' => 'Escuela Diurna (I y II Ciclo)'
        ]);
        BudgetType::create([
            'id' => 4,
            'name' => 'Nuevas Oportunidades'
        ]);
        BudgetType::create([
            'id' => 5,
            'name' => 'Educación Tecnica'
        ]);
        BudgetType::create([
            'id' => 6,
            'name' => 'Educación Especial'
        ]);
        BudgetType::create([
            'id' => 7,
            'name' => 'Educación Adultos'
        ]);
    }

}

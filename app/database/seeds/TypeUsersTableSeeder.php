<?php

class TypeUsersTableSeeder extends Seeder {

    public function run() {
        
        TypeUser::create([
            'id'=>1,
            'name'=>'Administrador'
        ]);
        TypeUser::create([
            'id'=>2,
            'name'=>'Contador'
        ]);
        TypeUser::create([
            'id'=>3,
            'name'=>'Director'
        ]);
    }

}

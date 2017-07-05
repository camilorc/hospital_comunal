<?php

use Illuminate\Database\Seeder;

class profile_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregamos los perfiles

        \DB::table('profiles')->insert(array(
           'id' => 1,
           'type'  => 'Administrador' 
           
    	));

    	\DB::table('profiles')->insert(array(
           'id' => 2,
           'type'  => 'Director' 
           
    	));

    	\DB::table('profiles')->insert(array(
           'id' => 3,
           'type'  => 'Secretaria' 
           
    	));

    	\DB::table('profiles')->insert(array(
           'id' => 4,
           'type'  => 'Paciente' 
           
    	));
    }
}

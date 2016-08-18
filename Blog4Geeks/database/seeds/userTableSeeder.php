<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'nombre'            =>'Administrador',
            'apellido'          =>'Sistemas',
            'apodo'             =>'admin',
            'fecha_nacimiento'  =>'16-09-1985',
            'email'             =>'admin@test.com',
            'password'          =>bcrypt('12345')
        ]);
    }
}

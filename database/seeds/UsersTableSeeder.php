<?php

use Softcomun\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::create(['name' => 'javier elias','email' => 'javier_el_balla@hotmail.com', 'password' => bcrypt('javier20'), 'estado' => 'Activo']);
        $user = User::create([
            'name' => 'javier elias',
            'email' => 'javier_el_balla@hotmail.com',
            'password' => bcrypt('javier20'),
            'estado' => 'Activo'
        ]);
    }
}

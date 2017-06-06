<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        
        $this->call(TipotrabajadorTableSeeder::class);
        $this->call(TrabajadorTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // $this->call(AccesoUserTableSeeder::class);

        Model::reguard();

    }
}

<?php

use Illuminate\Database\Seeder;

class TipotrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipotrabajador::create(['nombre' => 'Root', 'descripcion'=>'asd']);
        Tipotrabajador::create(['nombre' => 'Propietario', 'descripcion'=>'regerg']);
        Tipotrabajador::create(['nombre' => 'Administrador', 'descripcion'=>'wt5y6u']);
        Tipotrabajador::create(['nombre' => 'Recepcion', 'descripcion'=>'gnvcbef']);
    }
}

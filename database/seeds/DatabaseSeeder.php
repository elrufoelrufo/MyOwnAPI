<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

//Para el truncado
use App\Maker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Para que no tenga en cuenta la clave externa de makers en vehicles y permita el truncado
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        //Para truncar todos los datos
        Maker::truncate();

        Model::unguard();

        $this->call('MakerSeed');
        $this->call('VehiclesSeed');
        Model::reguard();
    }
}

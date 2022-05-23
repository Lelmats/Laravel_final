<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datas')->insert([
            'codigo' => 'Mi primera nota',
            'descripcion' => 'Contenido de prueba',
            'cantidad' => 'Contenido de prueba',
            'codigo' => 'Contenido de prueba',
        ]);

        DB::table('datas')->insert([
            'codigo' => 'Mi primera nota',
            'descripcion' => 'Contenido de prueba',
            'cantidad' => 'Contenido de prueba',
            'codigo' => 'Contenido de prueba',
        ]);

        DB::table('datas')->insert([
            'codigo' => 'Mi primera nota',
            'descripcion' => 'Contenido de prueba',
            'cantidad' => 'Contenido de prueba',
            'codigo' => 'Contenido de prueba',
        ]);

        DB::table('datas')->insert([
            'codigo' => 'Mi primera nota',
            'descripcion' => 'Contenido de prueba',
            'cantidad' => 'Contenido de prueba',
            'codigo' => 'Contenido de prueba',
        ]);

        DB::table('datas')->insert([
            'codigo' => 'Mi primera nota',
            'descripcion' => 'Contenido de prueba',
            'cantidad' => 'Contenido de prueba',
            'codigo' => 'Contenido de prueba',
        ]);
    }
}

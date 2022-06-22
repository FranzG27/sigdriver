<?php

namespace Database\Seeders;

use App\Models\Conductor;
use App\Models\Microbus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conductor::create([
            'ci'                => '9023704',
            'nombre'            => 'Alvaro Flores',
            'fecha_nacimiento'  => '1998-03-11',
            'sexo'              => 'Masculino',
            'telefono'          => '62157277',
            'email'             => 'alvaro@gmail.com',
            'categoria_licencia'=> 'P',
         ]);

         Conductor::create([
            'ci'                => '6542198',
            'nombre'            => 'MiGrupoNoHaceNada',
            'fecha_nacimiento'  => '1990-03-11',
            'sexo'              => 'No Binario',
            'telefono'          => '5214698',
            'email'             => 'ojalaSeAplazen@gmail.com',
            'categoria_licencia'=> 'P',
         ]);

         Microbus::create([
            'placa'              =>'3030LHR',
            'modelo'             =>'Tundra',
            'cantidad_asientos'  =>'6',
            'linea'              =>'18',
            'numero_interno'     =>'10',
            'fecha_asignacion'   =>'2022-06-21',
            'fecha_baja'         =>'2022-07-21',
            'conductor_id'       =>'1'
         ]);

         Microbus::create([
            'placa'              =>'2505NZU',
            'modelo'             =>'Frontier',
            'cantidad_asientos'  =>'5',
            'linea'              =>'17',
            'numero_interno'     =>'15',
            'fecha_asignacion'   =>'2022-06-15',
            'fecha_baja'         =>'2022-07-25',
            'conductor_id'       =>'2'
         ]);
    }
}

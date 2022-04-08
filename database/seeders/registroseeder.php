<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class registroseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres=["Juan","Pedro","Maria","Jose","Luis","Carlos","Ana","francisco"];
        $correos=["Yharonsmoke57@gmail.com","elemmeerre@4516.com","correodeejemplo@gmail.com","mariadelosangeles@gmail.com","mainzedmaestria6@gmail.com","illaoidepapel@gmail.com","elsimpdelchino454@gmail","elenterrador68@gmail.com"];
        for($i = 0; $i <= 7; $i++){
            DB::table('registro')->insert([
                'Nombre' => $nombres[$i],
                'Correo_Elctronico' => $correos[$i],
            ]);
        }
        
    }   
    
}

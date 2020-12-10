<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_rol')->insert([
           'user_id'=> 1,
           'rol_id' => 1 
        ]);
        DB::table('usuario_rol')->insert([
            'user_id'=> 2,
            'rol_id' => 2 
         ]);
         DB::table('usuario_rol')->insert([
            'user_id'=> 3,
            'rol_id' => 3 
         ]);
         DB::table('usuario_rol')->insert([
            'user_id'=> 4,
            'rol_id' => 4 
         ]);
         DB::table('usuario_rol')->insert([
            'user_id'=> 5,
            'rol_id' => 5 
         ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Coordinador'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'publicador'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'docente'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'kardex'
        ]);
    }
}

<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // roles
        // $role_admin = App\Role::create([
        //     'name' => 'admin',
        //     'display_name' => 'Administrador',
        //     'description' => 'Administrador',
        // ]);
        // $role_usuario = App\Role::create([
        //     'name' => 'usuario',
        //     'display_name' => 'Usuario',
        //     'description' => 'Usuario',
        // ]);

        // usuarios
        $user_admin = \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);        
        //$user_admin->attachRole($role_admin);
        $user_usuario = \App\Models\User::create([
            'name' => 'coordinador',
            'email' => 'coordina@coordina.com',
            'password' => bcrypt('coordina'),
        ]);  

        $user_usuario = \App\Models\User::create([
            'name' => 'publicador',
            'email' => 'publicador@publicador.com',
            'password' => bcrypt('publicador'),
        ]);        
        //$user_usuario->attachRole($role_usuario)
        $user_usuario = \App\Models\User::create([
            'name' => 'docente',
            'email' => 'docente@docente.com',
            'password' => bcrypt('docente'),
        ]);
        $user_usuario = \App\Models\User::create([
            'name' => 'kardex',
            'email' => 'kardex@kardex.com',
            'password' => bcrypt('docente'),
        ]);  
        //admin
        //publicador
        //coordinador
        //docente
        //kardex
    }
}

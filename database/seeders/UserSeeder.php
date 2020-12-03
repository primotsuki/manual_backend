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
            'name' => 'usuario',
            'email' => 'usuario@usuario.com',
            'password' => bcrypt('usuario'),
        ]);        
        //$user_usuario->attachRole($role_usuario);
    }
}

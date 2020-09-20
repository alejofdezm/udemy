<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'administrador';
        $role->description = 'Administrator de cursos';
        $role->save();

        $role = new Role();
        $role->name = 'usuarios';
        $role->description = 'Usuario con pocos provilegios';
        $role->save();

        $role = new Role();
        $role->name = 'colaborador';
        $role->description = 'Revisor de cursos';
        $role->save();
    }
}

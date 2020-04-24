<?php

use App\Role;
use Illuminate\Database\Seeder;

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
        $role->nombre_rol = "admin";
        $role->descripcion = "Administrador";
        $role->save();

        $role = new Role();
        $role->nombre_rol = "vendedor";
        $role->descripcion = "Vendedor";
        $role->save();
    }
}

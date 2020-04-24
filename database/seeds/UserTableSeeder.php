<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_vendedor = Role::where('nombre_rol','vendedor')->first();
        $role_admin = Role::where('nombre_rol','admin')->first();

        $user = new User();
        $user->name = "User";
        $user->email="user@gmail.com";
        $user->password=bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_vendedor);

        $user = new User();
        $user->name = "Admin";
        $user->email="admin@gmail.com";
        $user->password=bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}

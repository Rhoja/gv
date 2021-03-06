<?php

use Illuminate\Database\Seeder;
use Garro\Role;
use Garro\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = Role::where('name','User')->first();
        $admin_role = Role::where('name','Admin')->first();

        $user = new User();
        $user->name = 'Brandon';
        $user->email = 'Brandon0893.bg@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($admin_role);

        $user = new User();
        $user->name = 'Jose';
        $user->email = 'jose@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($user_role);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Robin Arida";
        $user->email = "robin.arida@gmail.com";
        $user->password = Hash::make("password");
        $user->user_role_id = config('constants.user_roles.PORTALADMIN');
        $user->context_id = config('constants.context.PORTAL');
        $user->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\UserRole;
use Carbon\Carbon;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_roles = [
        	[
        		'id' => config('constants.user_roles.PORTALADMIN'),
        		'name' => 'PORTALADMIN',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
        	]
        ];

        UserRole::insert($user_roles);
    }
}

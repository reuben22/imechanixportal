<?php

use Illuminate\Database\Seeder;
use App\Context;
use Carbon\Carbon;

class ContextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $context = [
        	[
        		'id' => config('constants.context.PORTAL'),
        		'name' => 'PORTAL',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
        	]
        ];

        Context::insert($context);
    }
}
